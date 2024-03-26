<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Traits\DeletesImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use DeletesImage;

    protected $fillable=[
            'details',
            'image',
    ];

     protected $casts=[
         'image' => ImageField::class.':avatar,images/avatar.png',
     ];
}
