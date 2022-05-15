<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferLog extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'source_type',
        'source_id',
        'target_type',
        'target_id',
        'amount',
        'from_wallet',
        'to_wallet',
        'message',
    ];

    protected $casts = [
        'amount' => 'float'
    ];
}
