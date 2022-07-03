<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
