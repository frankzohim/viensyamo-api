<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\Membership;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Memberships_user extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'membership_id',
        'payment_id',
        'announcement_id',
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
    public function announcement():BelongsTo{
        return $this->belongsTo(Announcement::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }


}
