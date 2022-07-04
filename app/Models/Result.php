<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property Student $student
 * @property int student_id
 * @property int written
 * @property int practical
 * @property int viva
 */

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'written',
        'practical',
        'viva',
    ];

    protected $casts = [
        'student_id' => 'int',
        'written' => 'int',
        'practical' => 'int',
        'viva' => 'int',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
