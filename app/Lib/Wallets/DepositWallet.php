<?php

namespace App\Lib\Wallets;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class DepositWallet implements Wallet, CashInAble
{

    public function getName(): string
    {
        return 'Deposit Wallet';
    }

    public function getEnum(): \App\Enums\Wallet
    {
        return \App\Enums\Wallet::Deposit();
    }

    public function getColumn(): string
    {
        return 'deposit_wallet';
    }

    public function getBalanceFor(Model $model): float
    {
        return $model->{$this->getColumn()};
    }

    public function minimumCashInAmount(): float
    {
       return 25;
    }

    public function maximumCashInAmount(): float
    {
        return 50000;
    }

    public function getTotalCashInAmountFor(Model $model): float
    {
        return $model->{$this->getColumn().'_in'};
    }

    public function allowedCashInMethods(): array
    {
        return [];
    }

    public function allowedCashInModels(): array
    {
        return [
            User::class
        ];
    }
}
