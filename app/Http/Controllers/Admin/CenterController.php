<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Http\Requests\CenterStoreRequest;
use App\Http\Requests\CenterUpdateRequest;
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
        return view('admin.center.show', [
            'center' => $center
        ]);
    }

    public function edit(Center $center)
    {
        return view('admin.center.edit', [
            'center' => $center
        ]);
    }

    public function update(CenterUpdateRequest $request, Center $center)
    {
        return response()->report($request->update($center), 'Center updated successfully');
    }

    public function destroy(Center $center)
    {
        return response()->report($center->delete(), 'Center deleted successfully');
    }
}
