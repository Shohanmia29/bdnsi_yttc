<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawLog extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'source_type',
        'source_id',
        'reference_type',
        'reference_id',
        'amount',
        'wallet',
        'method',
        'message',
    ];

    protected $casts = [
        'amount' => 'float'
    ];
}
