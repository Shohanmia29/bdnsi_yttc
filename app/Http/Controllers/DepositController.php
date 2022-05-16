<?php

namespace App\Http\Controllers;

use App\Enums\PaymentMethod;
use App\Lib\PaymentMethods\PaymentMethodProvider;
use App\Models\CashInLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(
                CashInLog::where([
                    'target_type' => User::class,
                    'target_id' => Auth::id()
                ])
            )->toJson();
        }
        return view('deposit.index');
    }

    public function create()
    {
        return view('deposit.create');
    }

    public function store(Request $request)
    {
        $validatde = $request->validate([
            'payment_method' => 'required|enum_value:'.PaymentMethod::class.',false',
            'amount' => 'required|numeric'
        ]);

        // todo implement deposit logic
        return response()->error();
    }
}
