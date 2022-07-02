<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'username',
        'name',
        'phone',
        'email',
        'center_id',
        'password',
        'avatar',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function getAvatarAttribute($user){
        if(isset($user)){
            return  \App\Lib\Image::url($user);
        }
        else{
            return  asset('images/avatar.png');
        }
    }
}
