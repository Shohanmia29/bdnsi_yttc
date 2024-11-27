<?php

namespace App\Models;

use App\Casts\ImageField;
use App\Traits\DeletesImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use DeletesImage;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'description',
        'status',
    ];

    protected $casts = [
        'image' => ImageField::class.':team,images',
    ];


}
