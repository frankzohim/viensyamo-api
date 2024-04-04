<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'membership_id',
        'payment_id',
        'expire_at',
        'status'
    ];

    protected $dates = ['expire_at'];

    public function membership():BelongsTo{
        return $this->belongsTo(Membership::class);
    }
    public function payment():BelongsTo{
        return $this->belongsTo(Payment::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
