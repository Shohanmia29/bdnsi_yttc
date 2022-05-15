<?php

namespace App\Http\Controllers;

use App\Lib\Card;
use App\Lib\Wallets\CashInAble;
use App\Lib\Wallets\WalletManager;
use App\Lib\Wallets\WithdrawAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $cards = [];
        foreach (WalletManager::all() as $wallet) {
            $kv = [];
            if ($wallet instanceof CashInAble) {
                $kv['Total In'] = $wallet->getTotalCashInAmountFor(Auth::user());
            }
            if ($wallet instanceof WithdrawAble) {
                $kv['Total Out'] = $wallet->getTotalWithdrawAmountFor(Auth::user());
            }
            $cards[] = Card::make($wallet->getName(), $wallet->getBalanceFor(\Auth::user()), $kv);
        }
        return view('dashboard', compact('cards'));
    }
}
