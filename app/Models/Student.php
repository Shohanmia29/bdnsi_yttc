<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Enums\BloodGroup;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Enums\StudentStatus;
use App\Traits\DeletesImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, DeletesImage;

    protected $fillable = [
        'center_id',
        'name',
        'fathers_name',
        'mothers_name',
        'roll',
        'registration',
        'date_of_birth',
        'gender',
        'blood_group',
        'religion',
        'present_address',
        'permanent_address',
        'phone',
        'email',
        'guardian_name',
        'nid_or_birth',
        'session_id',
        'subject_id',
        'picture',
        'status',
    ];

    protected $casts = [
        'blood_group' => BloodGroup::class,
        'gender' => Gender::class,
        'religion' => Religion::class,
        'status' => StudentStatus::class,
        'picture' => ImageField::class.':images/students',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
