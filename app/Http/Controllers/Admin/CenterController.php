<?php

namespace App\Http\Controllers\Admin;

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

    public function store(Request $request)
    {
        $validated = $request->validate([

            'branch_name' => 'required|string',
            'owner_name' => 'required|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'religion' => 'required|numeric',
            'gender' => 'required|numeric',
            'nationality' => 'required|string',
            'division' => 'required|numeric',
            'district' => 'required|numeric',
            'upazilla' => 'required|numeric',
            'post_office' => 'required|string',
            'postal_code' => 'required|string',
            'facebook_url' => 'nullable|string',
            'no_of_computers' => 'required|numeric',
            'institute_age' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string|max:11|min:11',
            'email' => 'required|email',
            'photo' => 'required|image',
            'authority_signature' => 'required|image',
            'nid_photo' => 'required|image',
            'tread_license' => 'required|image',
        ]);

        if($request->hasFile('photo')){
            $validated['photo'] = Image::store('photo','upload/center/photo');
        }

        if($request->hasFile('authority_signature')){
            $validated['authority_signature'] = Image::store('authority_signature','upload/center/authority_signature');
        }

        if($request->hasFile('nid_photo')){
            $validated['nid_photo'] = Image::store('nid_photo','upload/center/nid_photo');
        }

        if($request->hasFile('tread_license')){
            $validated['tread_license'] = Image::store('tread_license','upload/center/tread_license');
        }

        return response()->report(Center::create($validated), 'Center Created successfully');
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
