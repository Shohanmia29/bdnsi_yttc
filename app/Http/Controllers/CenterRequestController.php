<?php

namespace App\Http\Controllers;

use App\Http\Requests\CenterStoreRequest;

class CenterRequestController extends Controller
{
    public function create()
    {
        return view('center-request');
    }

    public function store(CenterStoreRequest $request)
    {
        return response()->report(
            $request->store(),
            'Center request submitted successfully'
        );
    }
}
