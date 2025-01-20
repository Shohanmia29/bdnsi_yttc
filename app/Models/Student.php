<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Enums\BloodGroup;
use App\Enums\CourseType;
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
        'course_type',
    ];

    protected $casts = [
        'result_publised' => 'datetime',
        'blood_group' => BloodGroup::class,
        'gender' => Gender::class,
        'religion' => Religion::class,
        'status' => StudentStatus::class,
        'course_type' => CourseType::class,
        'picture' => ImageField::class . ':images/students',
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
        return (static::max('roll') ?? 608920) + 1;
    }

    public static function getLastFreeRegistration()
    {
        // Retrieve the maximum value from the 'registration' column or use 80889620 if null.
        $maxRegistration = static::max('registration');

        // Ensure the value is numeric. If not, default to 80889620.
        $lastRegistration = is_numeric($maxRegistration) ? (int)$maxRegistration : 80889620;

        // Return the next registration value.
        return $lastRegistration + 1;
    }






    public function written( $marks=0)
    {
        $marks=$this->result->written;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 800:
                    return 'A+';
                case $marks >= 750:
                    return 'A';
                case $marks >= 700:
                    return 'A-';
                case $marks >= 650:
                    return 'B';
                case $marks >= 600:
                    return 'B+';
                case $marks >= 550:
                    return 'B-';
                case $marks >= 500:
                    return 'C+';
                case $marks >= 450:
                    return 'C';
                case $marks >= 400:
                    return 'D';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case $marks >= 3040:
                    return 'A+';
                case $marks >= 2850:
                    return 'A';
                case $marks >= 2660:
                    return 'A-';
                case $marks >= 2470:
                    return 'B+';
                case $marks >= 2280:
                    return 'B';
                case $marks >= 2090:
                    return 'B-';
                case $marks >= 1900:
                    return 'C+';
                case $marks >= 1710:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }
        else{
            return 'N/A';
        }
    }

    public function viva( $marks=0)
    {
        $marks=$this->result->viva;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return '';
            }
        } elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 80 && $marks <= 100:
                    return 'A+';
                case $marks >= 75 && $marks < 80:
                    return 'A';
                case $marks >= 70 && $marks < 75:
                    return 'A-';
                case $marks >= 65 && $marks < 70:
                    return 'B';
                case $marks >= 60 && $marks < 65:
                    return 'B+';
                case $marks >= 55 && $marks < 60:
                    return 'B-';
                case $marks >= 50 && $marks < 55:
                    return 'C+';
                case $marks >= 45 && $marks < 50:
                    return 'C';
                case $marks >= 40 && $marks < 45:
                    return 'D';
                case $marks >= 0 && $marks < 40:
                    return 'F';
                default:
                    return 'N/A';
            }
        }
        elseif ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case $marks >= 400 && $marks <= 500:
                    return 'A+';
                case $marks >= 375 && $marks < 400:
                    return 'A';
                case $marks >= 350 && $marks < 375:
                    return 'A-';
                case $marks >= 325 && $marks < 350:
                    return 'B';
                case $marks >= 300 && $marks < 325:
                    return 'B+';
                case $marks >= 275 && $marks < 300:
                    return 'B-';
                case $marks >= 250 && $marks < 275:
                    return 'C+';
                case $marks >= 225 && $marks < 250:
                    return 'C';
                case $marks >= 200 && $marks < 225:
                    return 'D';
                case $marks >= 0 && $marks < 200:
                    return 'F';
                default:
                    return 'N/A';
            }
        } else {
            return 'N/A';
        }
    }
    public function practical($marks=0)
    {
        $marks=$this->result->practical;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return '';
            }
        } elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 80 && $marks <= 100:
                    return 'A+';
                case $marks >= 75 && $marks < 80:
                    return 'A';
                case $marks >= 70 && $marks < 75:
                    return 'A-';
                case $marks >= 65 && $marks < 70:
                    return 'B';
                case $marks >= 60 && $marks < 65:
                    return 'B+';
                case $marks >= 55 && $marks < 60:
                    return 'B-';
                case $marks >= 50 && $marks < 55:
                    return 'C+';
                case $marks >= 45 && $marks < 50:
                    return 'C';
                case $marks >= 40 && $marks < 45:
                    return 'D';
                case $marks >= 0 && $marks < 40:
                    return 'F';
                default:
                    return 'N/A';
            }
        } elseif ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case $marks >= 400 && $marks <= 500:
                    return 'A+';
                case $marks >= 375 && $marks < 400:
                    return 'A';
                case $marks >= 350 && $marks < 375:
                    return 'A-';
                case $marks >= 325 && $marks < 350:
                    return 'B';
                case $marks >= 300 && $marks < 325:
                    return 'B+';
                case $marks >= 275 && $marks < 300:
                    return 'B-';
                case $marks >= 250 && $marks < 275:
                    return 'C+';
                case $marks >= 225 && $marks < 250:
                    return 'C';
                case $marks >= 200 && $marks < 225:
                    return 'D';
                case $marks >= 0 && $marks < 200:
                    return 'F';
                default:
                    return 'N/A';
            }
        } else {
            return 'N/A';


    }
    }



    public function writtenResult( $marks=0)
    {
        $marks=$this->result->written;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 800:
                    return 'A+';
                case $marks >= 750:
                    return 'A';
                case $marks >= 700:
                    return 'A-';
                case $marks >= 650:
                    return 'B';
                case $marks >= 600:
                    return 'B+';
                case $marks >= 550:
                    return 'B-';
                case $marks >= 500:
                    return 'C+';
                case $marks >= 450:
                    return 'C';
                case $marks >= 400:
                    return 'D';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {

            switch (true) {
                case $marks >= 3040:
                    return 'A+';
                case $marks >= 2850:
                    return 'A';
                case $marks >= 2660:
                    return 'A-';
                case $marks >= 2470:
                    return 'B+';
                case $marks >= 2280:
                    return 'B';
                case $marks >= 2090:
                    return 'B-';
                case $marks >= 1900:
                    return 'C+';
                case $marks >= 1710:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return 'N/A';
            }
        }
        else{
            return 'N/A';
        }
    }

    public function vivaResult( $marks=0)
    {
        $marks=$this->result->viva;

        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return '';
            }
        } elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 80 && $marks <= 100:
                    return 'A+';
                case $marks >= 75 && $marks < 80:
                    return 'A';
                case $marks >= 70 && $marks < 75:
                    return 'A-';
                case $marks >= 65 && $marks < 70:
                    return 'B';
                case $marks >= 60 && $marks < 65:
                    return 'B+';
                case $marks >= 55 && $marks < 60:
                    return 'B-';
                case $marks >= 50 && $marks < 55:
                    return 'C+';
                case $marks >= 45 && $marks < 50:
                    return 'C';
                case $marks >= 40 && $marks < 45:
                    return 'D';
                case $marks >= 0 && $marks < 40:
                    return 'F';
                default:
                    return 'N/A';
            }
        }
        elseif ($this->course_type->is(CourseType::Diploma())) {

            switch (true) {
                case $marks >= 400 && $marks <= 500:
                    return 'A+';
                case $marks >= 375 && $marks < 400:
                    return 'A';
                case $marks >= 350 && $marks < 375:
                    return 'A-';
                case $marks >= 325 && $marks < 350:
                    return 'B';
                case $marks >= 300 && $marks < 325:
                    return 'B+';
                case $marks >= 275 && $marks < 300:
                    return 'B-';
                case $marks >= 250 && $marks < 275:
                    return 'C+';
                case $marks >= 225 && $marks < 250:
                    return 'C';
                case $marks >= 200 && $marks < 225:
                    return 'D';
                case $marks >= 0 && $marks < 200:
                    return 'F';
                default:
                    return 'N/A';
            }
        } else {
            return 'N/A';
        }
    }
    public function practicalResult($marks=0)
    {
        $marks=$this->result->practical;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 'A+';
                case $marks >= 70:
                    return 'A';
                case $marks >= 60:
                    return 'A-';
                case $marks >= 50:
                    return 'B';
                case $marks >= 40:
                    return 'C';
                case $marks >= 0:
                    return 'F';
                default:
                    return '';
            }
        } elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 80 && $marks <= 100:
                    return 'A+';
                case $marks >= 75 && $marks < 80:
                    return 'A';
                case $marks >= 70 && $marks < 75:
                    return 'A-';
                case $marks >= 65 && $marks < 70:
                    return 'B';
                case $marks >= 60 && $marks < 65:
                    return 'B+';
                case $marks >= 55 && $marks < 60:
                    return 'B-';
                case $marks >= 50 && $marks < 55:
                    return 'C+';
                case $marks >= 45 && $marks < 50:
                    return 'C';
                case $marks >= 40 && $marks < 45:
                    return 'D';
                case $marks >= 0 && $marks < 40:
                    return 'F';
                default:
                    return 'N/A';
            }
        } elseif ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case $marks >= 400 && $marks <= 500:
                    return 'A+';
                case $marks >= 375 && $marks < 400:
                    return 'A';
                case $marks >= 350 && $marks < 375:
                    return 'A-';
                case $marks >= 325 && $marks < 350:
                    return 'B';
                case $marks >= 300 && $marks < 325:
                    return 'B+';
                case $marks >= 275 && $marks < 300:
                    return 'B-';
                case $marks >= 250 && $marks < 275:
                    return 'C+';
                case $marks >= 225 && $marks < 250:
                    return 'C';
                case $marks >= 200 && $marks < 225:
                    return 'D';
                case $marks >= 0 && $marks < 200:
                    return 'F';
                default:
                    return 'N/A';
            }
        } else {
            return 'N/A';


        }
    }



    public function gpa()
    {
        $marks=$this->result->written;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 800 && $marks <= 1000):
                    return $grade = "A+";
                case ($marks >= 750 && $marks < 800):
                    return $grade = "A";
                case ($marks >= 700 && $marks < 750):
                    return $grade = "A-";
                case ($marks >= 650 && $marks < 700):
                    return $grade = "B";
                case ($marks >= 600 && $marks < 650):
                    return $grade = "B+";
                case ($marks >= 550 && $marks < 600):
                    return $grade = "B-";
                case ($marks >= 500 && $marks < 550):
                    return $grade = "C+";
                case ($marks >= 450 && $marks < 500):
                    return $grade = "C";
                case ($marks >= 400 && $marks < 450):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 400):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {

            switch (true) {
                case ($marks >= 3040 && $marks <= 3800):
                    return $grade = "A+";
                case ($marks >= 2850 && $marks < 3040):
                    return $grade = "A";
                case ($marks >= 2660 && $marks < 2850):
                    return $grade = "A-";
                case ($marks >= 2470 && $marks < 2660):
                    return $grade = "B";
                case ($marks >= 2280 && $marks < 2470):
                    return $grade = "B+";
                case ($marks >= 2090 && $marks < 2280):
                    return $grade = "B-";
                case ($marks >= 1900 && $marks < 2090):
                    return $grade = "C+";
                case ($marks >= 1710 && $marks < 1900):
                    return $grade = "C";
                case ($marks >= 1520 && $marks < 1710):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 1520):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }
        else{
            return 'N/A';
        }


    }
    public function gpaViva( $marks=0)
    {
        $marks=$this->result->viva;

        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case $marks >= 80:
                    return 4 +'.00';
                case $marks >= 70:
                    return 4 +'.70';
                case $marks >= 60:
                    return 4+'.50';
                case $marks >= 50:
                    return 3+'.50';
                case $marks >= 40:
                    return 3+'.00';
                case $marks >= 0:
                    return '0.00';
                default:
                    return '';
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case $marks >= 800:
                    return '4.00';
                case $marks >= 750:
                    return '3.75';
                case $marks >= 700:
                    return '3.50';
                case $marks >= 650:
                    return '3.25';
                case $marks >= 600:
                    return '3.00';
                case $marks >= 550:
                    return '2.75';
                case $marks >= 500:
                    return '2.50';
                case $marks >= 450:
                    return '2.25';
                case $marks >= 400:
                    return '2.00';
                case $marks >= 0:
                    return '0.00';
                default:
                    return 'N/A';
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case $marks >= 3040:
                    return '4.00';
                case $marks >= 2850:
                    return '3.75';
                case $marks >= 2660:
                    return '3.50';
                case $marks >= 2470:
                    return '3.25';
                case $marks >= 2280:
                    return '3.00';
                case $marks >= 2090:
                    return '2.75';
                case $marks >= 1900:
                    return '2.50';
                case $marks >= 1710:
                    return '2.25';
                case $marks >= 1520:
                    return '2.00';
                case $marks >= 0:
                    return '0.00';
                default:
                    return 'N/A';
            }
        }
        else{
            return 'N/A';
        }
    }
    public function gpaPractical($marks = 0)
    {
        $marks = $this->result->practical;

        if ($this->course_type->is(CourseType::Regular())) {
            if ($marks >= 80) {
                return '4.00';
            } elseif ($marks >= 70) {
                return '4.70';
            } elseif ($marks >= 60) {
                return '4.50';
            } elseif ($marks >= 50) {
                return '3.50';
            } elseif ($marks >= 40) {
                return '3.00';
            } elseif ($marks >= 0) {
                return '0.00';
            } else {
                return '';
            }
        }

        elseif ($this->course_type->is(CourseType::Short_Course())) {
            if ($marks >= 800) {
                return '4.00';
            } elseif ($marks >= 750) {
                return '3.75';
            } elseif ($marks >= 700) {
                return '3.50';
            } elseif ($marks >= 650) {
                return '3.25';
            } elseif ($marks >= 600) {
                return '3.00';
            } elseif ($marks >= 550) {
                return '2.75';
            } elseif ($marks >= 500) {
                return '2.50';
            } elseif ($marks >= 450) {
                return '2.25';
            } elseif ($marks >= 400) {
                return '2.00';
            } elseif ($marks >= 0) {
                return '0.00';
            } else {
                return 'N/A';
            }
        }

        elseif ($this->course_type->is(CourseType::Diploma())) {
            if ($marks >= 3040) {
                return '4.00';
            } elseif ($marks >= 2850) {
                return '3.75';
            } elseif ($marks >= 2660) {
                return '3.50';
            } elseif ($marks >= 2470) {
                return '3.25';
            } elseif ($marks >= 2280) {
                return '3.00';
            } elseif ($marks >= 2090) {
                return '2.75';
            } elseif ($marks >= 1900) {
                return '2.50';
            } elseif ($marks >= 1710) {
                return '2.25';
            } elseif ($marks >= 1520) {
                return '2.00';
            } elseif ($marks >= 0) {
                return '0.00';
            } else {
                return 'N/A';
            }
        }

        else {
            return 'N/A';
        }
    }


    public function t_written()
    {
        $marks=$this->result->written;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 800 && $marks <= 1000):
                    return $grade = "A+";
                case ($marks >= 750 && $marks < 800):
                    return $grade = "A";
                case ($marks >= 700 && $marks < 750):
                    return $grade = "A-";
                case ($marks >= 650 && $marks < 700):
                    return $grade = "B";
                case ($marks >= 600 && $marks < 650):
                    return $grade = "B+";
                case ($marks >= 550 && $marks < 600):
                    return $grade = "B-";
                case ($marks >= 500 && $marks < 550):
                    return $grade = "C+";
                case ($marks >= 450 && $marks < 500):
                    return $grade = "C";
                case ($marks >= 400 && $marks < 450):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 400):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {

            switch (true) {
                case ($marks >= 3040 && $marks <= 3800):
                    return $grade = "A+";
                case ($marks >= 2850 && $marks < 3040):
                    return $grade = "A";
                case ($marks >= 2660 && $marks < 2850):
                    return $grade = "A-";
                case ($marks >= 2470 && $marks < 2660):
                    return $grade = "B";
                case ($marks >= 2280 && $marks < 2470):
                    return $grade = "B+";
                case ($marks >= 2090 && $marks < 2280):
                    return $grade = "B-";
                case ($marks >= 1900 && $marks < 2090):
                    return $grade = "C+";
                case ($marks >= 1710 && $marks < 1900):
                    return $grade = "C";
                case ($marks >= 1520 && $marks < 1710):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 1520):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }
        else{
            return 'N/A';
        }


    }

    public function t_written_gpa()
    {
        $marks=$this->result->written;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return 4.00;
                case ($marks >= 75 && $marks < 80):
                    return 3.75;
                case ($marks >= 70 && $marks < 75):
                    return 3.50;
                case ($marks >= 65 && $marks < 70):
                    return 3.25;
                case ($marks >= 60 && $marks < 65):
                    return 3.00;
                case ($marks >= 55 && $marks < 60):
                    return 2.75;
                case ($marks >= 50 && $marks < 55):
                    return 2.50;
                case ($marks >= 45 && $marks < 50):
                    return 2.25;
                case ($marks >= 40 && $marks < 45):
                    return 2.00;
                case ($marks >= 0 && $marks < 40):
                    return 0.00;
                default:
                    return "Invalid"; // If marks are out of range
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 800 && $marks <= 1000):
                    return $gpa = 4.00;
                case ($marks >= 750 && $marks < 800):
                    return $gpa = 3.75;
                case ($marks >= 700 && $marks < 750):
                    return $gpa = 3.50;
                case ($marks >= 650 && $marks < 700):
                    return $gpa = 3.25;
                case ($marks >= 600 && $marks < 650):
                    return $gpa = 3.00;
                case ($marks >= 550 && $marks < 600):
                    return $gpa = 2.75;
                case ($marks >= 500 && $marks < 550):
                    return $gpa = 2.50;
                case ($marks >= 450 && $marks < 500):
                    return $gpa = 2.25;
                case ($marks >= 400 && $marks < 450):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 400):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {

            switch (true) {
                case ($marks >= 3040 && $marks <= 3800):
                    return $gpa = 4.00;
                case ($marks >= 2850 && $marks < 3040):
                    return $gpa = 3.75;
                case ($marks >= 2660 && $marks < 2850):
                    return $gpa = 3.50;
                case ($marks >= 2470 && $marks < 2660):
                    return $gpa = 3.25;
                case ($marks >= 2280 && $marks < 2470):
                    return $gpa = 3.00;
                case ($marks >= 2090 && $marks < 2280):
                    return $gpa = 2.75;
                case ($marks >= 1900 && $marks < 2090):
                    return $gpa = 2.50;
                case ($marks >= 1710 && $marks < 1900):
                    return $gpa = 2.25;
                case ($marks >= 1520 && $marks < 1710):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 1520):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }
        else{
            return 'N/A';
        }

    }


    public function t_practical()
    {
        $marks=$this->result->practical;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        } elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }
        elseif ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case ($marks >= 400 && $marks <= 500):
                    return $grade = "A+";
                case ($marks >= 375 && $marks < 400):
                    return $grade = "A";
                case ($marks >= 350 && $marks < 375):
                    return $grade = "A-";
                case ($marks >= 325 && $marks < 350):
                    return $grade = "B";
                case ($marks >= 300 && $marks < 325):
                    return $grade = "B+";
                case ($marks >= 275 && $marks < 300):
                    return $grade = "B-";
                case ($marks >= 250 && $marks < 275):
                    return $grade = "C+";
                case ($marks >= 225 && $marks < 250):
                    return $grade = "C";
                case ($marks >= 200 && $marks < 225):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 200):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        } else {
            return 'N/A';
        }

    }

    public function t_practical_gpa()
    {
        $marks=$this->result->practical;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return 4.00;
                case ($marks >= 75 && $marks < 80):
                    return 3.75;
                case ($marks >= 70 && $marks < 75):
                    return 3.50;
                case ($marks >= 65 && $marks < 70):
                    return 3.25;
                case ($marks >= 60 && $marks < 65):
                    return 3.00;
                case ($marks >= 55 && $marks < 60):
                    return 2.75;
                case ($marks >= 50 && $marks < 55):
                    return 2.50;
                case ($marks >= 45 && $marks < 50):
                    return 2.25;
                case ($marks >= 40 && $marks < 45):
                    return 2.00;
                case ($marks >= 0 && $marks < 40):
                    return 0.00;
                default:
                    return "Invalid"; // If marks are out of range
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $gpa = 4.00;
                case ($marks >= 75 && $marks < 80):
                    return $gpa = 3.75;
                case ($marks >= 70 && $marks < 75):
                    return $gpa = 3.50;
                case ($marks >= 65 && $marks < 70):
                    return $gpa = 3.25;
                case ($marks >= 60 && $marks < 65):
                    return $gpa = 3.00;
                case ($marks >= 55 && $marks < 60):
                    return $gpa = 2.75;
                case ($marks >= 50 && $marks < 55):
                    return $gpa = 2.50;
                case ($marks >= 45 && $marks < 50):
                    return $gpa = 2.25;
                case ($marks >= 40 && $marks < 45):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 40):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }
        elseif  ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case ($marks >= 400 && $marks <= 500):
                    return $gpa = 4.00;
                case ($marks >= 375 && $marks < 400):
                    return $gpa = 3.75;
                case ($marks >= 350 && $marks < 375):
                    return $gpa = 3.50;
                case ($marks >= 325 && $marks < 350):
                    return $gpa = 3.25;
                case ($marks >= 300 && $marks < 325):
                    return $gpa = 3.00;
                case ($marks >= 275 && $marks < 300):
                    return $gpa = 2.75;
                case ($marks >= 250 && $marks < 275):
                    return $gpa = 2.50;
                case ($marks >= 225 && $marks < 250):
                    return $gpa = 2.25;
                case ($marks >= 200 && $marks < 225):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 200):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }
        else{
            return 'N/A';
        }

    }

    public function t_viva()
    {
        $marks=$this->result->viva;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }
        elseif ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $grade = "A+";
                case ($marks >= 75 && $marks < 80):
                    return $grade = "A";
                case ($marks >= 70 && $marks < 75):
                    return $grade = "A-";
                case ($marks >= 65 && $marks < 70):
                    return $grade = "B";
                case ($marks >= 60 && $marks < 65):
                    return $grade = "B+";
                case ($marks >= 55 && $marks < 60):
                    return $grade = "B-";
                case ($marks >= 50 && $marks < 55):
                    return $grade = "C+";
                case ($marks >= 45 && $marks < 50):
                    return $grade = "C";
                case ($marks >= 40 && $marks < 45):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 40):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        }
        elseif ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case ($marks >= 400 && $marks <= 500):
                    return $grade = "A+";
                case ($marks >= 375 && $marks < 400):
                    return $grade = "A";
                case ($marks >= 350 && $marks < 375):
                    return $grade = "A-";
                case ($marks >= 325 && $marks < 350):
                    return $grade = "B";
                case ($marks >= 300 && $marks < 325):
                    return $grade = "B+";
                case ($marks >= 275 && $marks < 300):
                    return $grade = "B-";
                case ($marks >= 250 && $marks < 275):
                    return $grade = "C+";
                case ($marks >= 225 && $marks < 250):
                    return $grade = "C";
                case ($marks >= 200 && $marks < 225):
                    return $grade = "D";
                case ($marks >= 0 && $marks < 200):
                    return $grade = "F";
                default:
                    return $grade = "Invalid"; // Handle invalid marks input
            }
        } else {
            return 'N/A';


        }

    }
    public function t_viva_gpa()
    {
        $marks=$this->result->viva;
        if ($this->course_type->is(CourseType::Regular())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return 4.00;
                case ($marks >= 75 && $marks < 80):
                    return 3.75;
                case ($marks >= 70 && $marks < 75):
                    return 3.50;
                case ($marks >= 65 && $marks < 70):
                    return 3.25;
                case ($marks >= 60 && $marks < 65):
                    return 3.00;
                case ($marks >= 55 && $marks < 60):
                    return 2.75;
                case ($marks >= 50 && $marks < 55):
                    return 2.50;
                case ($marks >= 45 && $marks < 50):
                    return 2.25;
                case ($marks >= 40 && $marks < 45):
                    return 2.00;
                case ($marks >= 0 && $marks < 40):
                    return 0.00;
                default:
                    return "Invalid"; // If marks are out of range
            }
        }

        elseif  ($this->course_type->is(CourseType::Short_Course())) {
            switch (true) {
                case ($marks >= 80 && $marks <= 100):
                    return $gpa = 4.00;
                case ($marks >= 75 && $marks < 80):
                    return $gpa = 3.75;
                case ($marks >= 70 && $marks < 75):
                    return $gpa = 3.50;
                case ($marks >= 65 && $marks < 70):
                    return $gpa = 3.25;
                case ($marks >= 60 && $marks < 65):
                    return $gpa = 3.00;
                case ($marks >= 55 && $marks < 60):
                    return $gpa = 2.75;
                case ($marks >= 50 && $marks < 55):
                    return $gpa = 2.50;
                case ($marks >= 45 && $marks < 50):
                    return $gpa = 2.25;
                case ($marks >= 40 && $marks < 45):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 40):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }

        elseif  ($this->course_type->is(CourseType::Diploma())) {
            switch (true) {
                case ($marks >= 400 && $marks <= 500):
                    return $gpa = 4.00;
                case ($marks >= 375 && $marks < 400):
                    return $gpa = 3.75;
                case ($marks >= 350 && $marks < 375):
                    return $gpa = 3.50;
                case ($marks >= 325 && $marks < 350):
                    return $gpa = 3.25;
                case ($marks >= 300 && $marks < 325):
                    return $gpa = 3.00;
                case ($marks >= 275 && $marks < 300):
                    return $gpa = 2.75;
                case ($marks >= 250 && $marks < 275):
                    return $gpa = 2.50;
                case ($marks >= 225 && $marks < 250):
                    return $gpa = 2.25;
                case ($marks >= 200 && $marks < 225):
                    return $gpa = 2.00;
                case ($marks >= 0 && $marks < 200):
                    return $gpa = 0.00;
                default:
                    return $gpa = "Invalid"; // Handle invalid marks input
            }
        }
        else{
            return 'N/A';
        }

    }




}
