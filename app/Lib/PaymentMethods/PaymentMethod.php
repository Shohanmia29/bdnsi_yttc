<?php

namespace App\Lib\PaymentMethods;

use Illuminate\Http\Request;

interface PaymentMethod
{
    public function methodEnum(): \App\Enums\PaymentMethod;

    public function available(): bool;

    public function handle($amount, Request $request);

    public function inputsForConfig(): array;
}
