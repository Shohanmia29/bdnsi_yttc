<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Enums\CenterStatus;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Lib\Image;
use App\Traits\DeletesImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory, DeletesImage;

    protected $fillable = [
        'code',
        'name',
        'owner_name',
        'fathers_name',
        'mothers_name',
        'religion',
        'gender',
        'nationality',
        'division',
        'district',
        'upazilla',
        'post_office',
        'postal_code',
        'facebook_url',
        'no_of_computers',
        'institute_age',
        'address',
        'mobile',
        'email',
        'photo',
        'authority_signature',
        'nid_photo',
        'trade_license',
        'status',
    ];

    protected $casts = [
        'gender' => Gender::class,
        'religion' => Religion::class,
        'status' => CenterStatus::class,
        'photo' => ImageField::class.':center/photo',
        'authority_signature' => ImageField::class.':center/authority_signature',
        'nid_photo' => ImageField::class.':center/nid_photo',
        'trade_license' => ImageField::class.':center/trade_license',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
