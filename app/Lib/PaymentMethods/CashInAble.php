<?php

namespace App\Lib\PaymentMethods;

use App\Models\CashInLog;
use Illuminate\Http\Request;

interface CashInAble
{
    public function getValidatedPayloadForCashIn(Request $request);

    public function handleCashIn(CashInLog $log);

    public function cashInInfo();

    public function inputsForCashIn(): array;
}
