<?php

namespace App\Models;

use App\Enums\CenterStatus;
use App\Enums\Gender;
use App\Enums\Religion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

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
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getPhotoAttribute($model){
        if(isset($model)){
            return  \App\Lib\Image::url($model);
        }
        else{
            return  asset('images/stop.png');
        }
    }

    public function getAuthoritySignatureAttribute($model){
        if(isset($model)){
            return  \App\Lib\Image::url($model);
        }
        else{
            return  asset('images/stop.png');
        }
    }

    public function getNidPhotoAttribute($model){
        if(isset($model)){
            return  \App\Lib\Image::url($model);
        }
        else{
            return  asset('images/stop.png');
        }
    }

    public function getTradeLicenseAttribute($model){
        if(isset($model)){
            return  \App\Lib\Image::url($model);
        }
        else{
            return  asset('images/stop.png');
        }
    }

}
