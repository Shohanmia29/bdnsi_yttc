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
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * @property Center center
 * @property Session session
 * @property Subject subject
 * @property Result result
 * @property int center_id
 * @property string name
 * @property string fathers_name
 * @property string mothers_name
 * @property string roll
 * @property string registration
 * @property Carbon date_of_birth
 * @property Gender gender
 * @property BloodGroup blood_group
 * @property Religion religion
 * @property string present_address
 * @property string permanent_address
 * @property string phone
 * @property string email
 * @property string guardian_name
 * @property string nid_or_birth
 * @property int session_id
 * @property int subject_id
 * @property string picture
 * @property StudentStatus status
 */

class Student extends Authenticatable
{
    use HasFactory, DeletesImage;

    protected $fillable = [
        'center_id',
        'name',
        'fathers_name',
        'mothers_name',
        'roll',
        'registration',
        'passport',
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
        'course_duration',
        'picture',
        'status',
        'exam_date',
        'result_publised',
        'due_amount',
        'paid_amount',
        'qualification',
    ];

    protected $casts = [
        'result_publised' => 'datetime',
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


    public function scopeOwn($query, $centerId = null)
    {
        $centerId = $centerId ?? Auth::user()->center_id;
        return $query->where(['center_id' => $centerId]);
    }

    public static function getLastFreeRoll()
    {
        return (static::max('roll') ?? 652187) + 1;
    }

    public static function getLastFreeRegistration()
    {
        return (static::max('registration') ?? 305197) + 1;
    }
}
