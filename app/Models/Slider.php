<?php

namespace App\Models;

use App\Lib\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{


    protected $fillable = [
        'id',
        'title',
        'photo',
        'type',

    ];

    public function getPhotoAttribute($value){
        if (isset($value)){
            return Image::url($value);
        }else{
            return  asset('images/no-image.png');
        }
    }


}
