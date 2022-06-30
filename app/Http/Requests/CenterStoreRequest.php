<?php

namespace App\Http\Requests;

use App\Enums\CenterStatus;
use App\Lib\Image;
use App\Models\Center;
use Illuminate\Foundation\Http\FormRequest;

class CenterStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
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
        ];
    }

    public function store($status = null)
    {
        $validated = $this->validated();

        if($this->hasFile('photo')){
            $validated['photo'] = Image::store('photo','upload/center/photo');
        }

        if($this->hasFile('authority_signature')){
            $validated['authority_signature'] = Image::store('authority_signature','upload/center/authority_signature');
        }

        if($this->hasFile('nid_photo')){
            $validated['nid_photo'] = Image::store('nid_photo','upload/center/nid_photo');
        }

        if($this->hasFile('tread_license')){
            $validated['tread_license'] = Image::store('tread_license','upload/center/tread_license');
        }

        $validated['status'] = $status ?? CenterStatus::Pending;

        return Center::create($validated);
    }
}
