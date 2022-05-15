<?php

namespace App\Lib\Wallets;

use App\Lib\PaymentMethods\PaymentMethod;
use App\Models\CashInLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WalletManager
{
    public static function all()
    {
        return array_map('app', [
            DepositWallet::class
        ]);
    }

    public static function cashInAbles()
    {
        return array_filter(static::all(), function ($wallet){
            return $wallet instanceof CashInAble;
        });
    }

    public static function cashInAblesFor(string $model)
    {
        return array_filter(static::cashInAbles(), function($wallet) use ($model){
            return in_array($model, $wallet->allowedCashInModels());
        });
    }

    public static function withdrawAbles()
    {
        return array_filter(static::all(), function ($wallet){
            return $wallet instanceof WithdrawAble;
        });
    }

    public static function withdrawAblesFor(string $model)
    {
        return array_filter(static::withdrawAbles(), function($wallet) use ($model){
            return in_array($model, $wallet->allowedCashInModels());
        });
    }

    public function cashIn(Model $target, Model $reference, Wallet $wallet, PaymentMethod $method, float $amount, string $message = null) {
        try {
            DB::beginTransaction();
            CashInLog::create([
                'target_type' => get_class($target),
                'target_id' => $target->getKey(),
                'reference_type' => get_class($reference),
                'reference_id' => $reference->getKey(),
                'amount' => $amount,
                'wallet' => $wallet->getEnum()->value,
                'method' => $method->methodEnum()->value,
                'message' => $message,
            ]);
            $target->{$wallet->getColumn()} += $amount;
            $target->{$wallet->getColumn().'_in'} += $amount;
            $target->save();
            DB::commit();
            return true;
        } catch (\Exception $ex) {
            DB::rollBack();
            return false;
        }
    }
}
