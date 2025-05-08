<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Http\Requests\CenterStoreRequest;
use App\Http\Requests\CenterUpdateRequest;
use App\Lib\Image;
use App\Models\Center;
use App\Models\District;
use App\Models\Result;
use App\Models\Student;
use App\Models\Upazila;
use App\Models\User;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        return view('admin.center.create',[
            'divisions' => \App\Models\Division::get(),
            'districts' => District::get()->mapWithKeys(function ($district) {
                return [
                    $district->id => [
                        'division_id' => $district->division_id,
                        'name' => $district->name,
                    ]
                ];
            }),
            'upazilas' => Upazila::get()->mapWithKeys(function ($upazila) {
                return [
                    $upazila->id => [
                        'district_id' => $upazila->district_id,
                        'name' => $upazila->name,
                    ]
                ];
            })->toArray()
        ]);
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
            'center' => $center,
            'divisions' => \App\Models\Division::get(),
            'districts' => District::get()->mapWithKeys(function ($district) {
                return [
                    $district->id => [
                        'division_id' => $district->division_id,
                        'name' => $district->name,
                    ]
                ];
            }),
            'upazilas' => Upazila::get()->mapWithKeys(function ($upazila) {
                return [
                    $upazila->id => [
                        'district_id' => $upazila->district_id,
                        'name' => $upazila->name,
                    ]
                ];
            })->toArray()
        ]);
    }

    public function update(CenterUpdateRequest $request, Center $center)
    {
         DB::transaction(function () use ($request, $center){
             $request->update($center);

         });
        return response()->report($center, 'Center updated successfully');
    }

    public function destroy(Center $center)
    {
        try {
            DB::beginTransaction();
            User::where('center_id',$center->id)->delete();
            $student= Student::where('center_id',$center->id)->pluck('id');
            Result::whereIn('student_id',$student)->delete();
            Student::where('center_id',$center->id)->whereNotIn('id',$student)->delete();
            $center->delete();
            DB::commit();
            return response()->report($center, 'Center deleted successfully');

        }catch (\Exception $exception){
            DB::rollBack();
            return response()->error('Some thing went wrong!');
        }


    }
}
