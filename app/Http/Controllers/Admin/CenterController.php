<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Http\Requests\CenterStoreRequest;
use App\Http\Requests\CenterUpdateRequest;
use App\Lib\Image;
use App\Models\Center;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    use ChecksPermission;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Center::orderBy('id','desc')->get())->addIndexColumn()->toJson();
        }
        if ($request->active=='active'){
            $centers=Center::where('status',CenterStatus::Approved)->orderBy('id','desc')->get();
            return view('admin.center.activeList',compact('centers'));
        }
        if ($request->pending=='pending'){
            $centers=Center::where('status',CenterStatus::Pending)->orderBy('id','desc')->get();
            return view('admin.center.pendingList',compact('centers'));
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
        return response()->error('access Permission');
        return response()->report($center->delete(), 'Center deleted successfully');
    }
}
