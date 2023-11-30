<?php

namespace App\Models;

use App\Lib\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'photo',

    ];



    public function getPhotoAttribute($photo){
        if (isset($photo)){
            return Image::url($photo);
        }
    }


}
