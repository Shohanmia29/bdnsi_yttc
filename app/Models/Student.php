<?php

namespace App\Models;

use App\Enums\BloodGroup;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Enums\StudentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'center_id',
        'name',
        'fathers_name',
        'mothers_name',
        'date_of_birth',
        'gender',
        'blood_group',
        'religion',
        'present_address',
        'permanent_address',
        'phone',
        'email',
        'gurdian_name',
        'nid_or_birth',
        'student_address',
        'training_session',
        'training_subject',
        'month_of_duration',
        'picture',
        'status',
    ];

    protected $cast = [
        'blood_group' => BloodGroup::class,
        'gender' => Gender::class,
        'religion' => Religion::class,
        'status' => StudentStatus::class,
    ];

    public function getPictureAttribute($model){
        if(isset($model)){
            return  \App\Lib\Image::url($model);
        }
        else{
            return  asset('images/stop.png');
        }
    }
}
