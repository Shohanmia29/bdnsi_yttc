<?php

namespace App\Models;

use App\Lib\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo'
    ];


    public function getPhotoAttribute($photo){
            if (isset($photo)){
                return Image::url($photo);
            }else{
                return  asset('images/no-image.png');
            }
    }

}
