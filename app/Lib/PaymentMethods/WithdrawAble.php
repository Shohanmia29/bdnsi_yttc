<?php

namespace App\Lib\PaymentMethods;

use App\Models\WithdrawLog;
use Illuminate\Http\Request;

interface WithdrawAble
{
    public function getValidatedPayloadForWithdraw(Request $request);

    public function handleWithdraw(WithdrawLog $log);

    public function inputsForWithdraw(): array;
}
