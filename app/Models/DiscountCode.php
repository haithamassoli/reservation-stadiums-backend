<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    protected $fillable = [
        'code',
        'discount',
        'expires_at',
        'discount_type',
        'max_uses',
    ];
}
