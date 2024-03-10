<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quation extends Model
{

    protected $fillable = [
        'exam_id',
        'body',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'answer' ,
    ];

}
