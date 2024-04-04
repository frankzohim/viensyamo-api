<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'payment_type',
        'price',
        'transaction_id',
        'transaction_ref',
        'status',
        'membership_id',
        'announcement_id',
        "payment_of",
        'user_id'
    ];


}
