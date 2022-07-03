<?php

namespace App\Http\Requests;

use App\Enums\CenterStatus;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Lib\Geo;
use App\Lib\Image;
use App\Models\Center;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CenterStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'owner_name' => 'required|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'religion' => 'required|numeric|enum_value:'.Religion::class.',false',
            'gender' => 'required|numeric|enum_value:'.Gender::class.',false',
            'nationality' => 'required|string',
            'division' => ['required','numeric',Rule::in(array_keys(Geo::divisions()))],
            'district' => ['required','numeric',Rule::in(array_keys(Geo::districts()))],
            'upazilla' => ['required','numeric',Rule::in(array_keys(Geo::upazillas()))],
            'post_office' => 'required|string',
            'postal_code' => 'required|string',
            'facebook_url' => 'nullable|string|url',
            'no_of_computers' => 'required|numeric',
            'institute_age' => 'required|numeric',
            'address' => 'required|string',
            'mobile' => 'required|string|max:11|min:11',
            'email' => 'required|email',
            'photo' => 'required|image',
            'authority_signature' => 'required|image',
            'nid_photo' => 'required|image',
            'trade_license' => 'required|image',
        ];
    }

    public function store($status = null)
    {
        $validated = $this->validated();

        $validated['code'] = $validated['code'] ?? random_int(111111, 999999);

//        if($this->hasFile('photo')){
//            $validated['photo'] = Image::store('photo','upload/center/photo');
//        }
//
//        if($this->hasFile('authority_signature')){
//            $validated['authority_signature'] = Image::store('authority_signature','upload/center/authority_signature');
//        }
//
//        if($this->hasFile('nid_photo')){
//            $validated['nid_photo'] = Image::store('nid_photo','upload/center/nid_photo');
//        }
//
//        if($this->hasFile('trade_license')){
//            $validated['trade_license'] = Image::store('trade_license','upload/center/trade_license');
//        }

        $validated['status'] = $status ?? CenterStatus::Pending;

        return Center::create($validated);
    }
}
