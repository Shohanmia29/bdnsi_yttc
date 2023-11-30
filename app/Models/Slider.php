<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Lib\Image;
use App\Traits\DeletesImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    use DeletesImage;

    protected $fillable = [
        'id',
        'title',
        'photo',

    ];



    protected $casts=[
        'photo' => ImageField::class . ':images/avatar.png',
    ];


}
