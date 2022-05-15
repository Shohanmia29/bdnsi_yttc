<?php

namespace App\Lib\Wallets;

use Illuminate\Database\Eloquent\Model;

interface TransferAble
{
    public function minimumTransferAmount(): float;

    public function maximumTransferAmount(): float;
}
