<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Http\Requests\CenterStoreRequest;
use App\Lib\Image;
use App\Models\Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Center::query())->toJson();
        }

        return view('admin.center.index');
    }

    public function create()
    {
        return view('admin.center.create');
    }

    public function store(CenterStoreRequest $request)
    {
        return response()->report($request->store(CenterStatus::Approved), 'Center Created successfully');
    }

    public function show(Center $center)
    {
        //
    }

    public function edit(Center $center)
    {
        //
    }

    public function update(Request $request, Center $center)
    {
        //
    }

    public function destroy(Center $center)
    {
        //
    }
}
