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
            'division' => ['required','numeric',Rule::in(array_keys(Geo::divisions()))],
            'district' => ['required','numeric',Rule::in(array_keys(Geo::districts()))],
            'upazilla' => ['required','numeric',Rule::in(array_keys(Geo::upazillas()))],
            'post_office' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string|max:11|min:11',
            'email' => 'required|email',
            'photo' => 'required|image',
            'authority_signature' => 'required|image',
            'nid_photo' => 'required|image',
        ];
    }

    public function store($status = null)
    {
        $validated = $this->validated();

        do {
            $validated['code'] = Center::max('code') + 1;

            $validated['code'] = $validated['code'] < 999999
                ? $validated['code']
                : random_int(111111, 999999);
        } while (Center::where(['code' => $validated['code']])->count());

        $validated['status'] = $status ?? CenterStatus::Pending;

        return Center::create($validated);
    }
}
