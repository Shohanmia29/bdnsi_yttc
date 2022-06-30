<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterRequestController extends Controller
{
    public function create()
    {
        return view('center-request');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
