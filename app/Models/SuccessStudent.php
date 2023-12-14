<?php

namespace App\Models;

use App\Lib\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStudent extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'image',
        'company_name',
    ];


    public function getImageAttribute($image){
        if (isset($image)){
            return Image::url($image);
        }else{
              return  asset('images/avater.png');
        }
    }


}
