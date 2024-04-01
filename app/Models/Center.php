<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Enums\CenterStatus;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Enums\StudentStatus;
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
        'division',
        'district',
        'upazilla',
        'post_office',
        'address',
        'mobile',
        'email',
        'photo',
        'authority_signature',
        'nid_photo',
        'status',
    ];

    protected $casts = [
        'gender' => Gender::class,
        'religion' => Religion::class,
        'status' => CenterStatus::class,
        'photo' => ImageField::class.':center/photo',
        'authority_signature' => ImageField::class.':center/authority_signature',
        'nid_photo' => ImageField::class.':center/nid_photo',
    ];

    public function students(){
        return $this->hasMany(Student::class,'center_id')->where('status',StudentStatus::Approved);
    }

    public function getPhotoAttribute($photo){
        if (isset($photo)){
            return Image::url($photo);
        }else{
            return  asset('images/avatar.png');
        }

    }


    public function users()
    {
        return $this->hasMany(User::class);
    }
}
