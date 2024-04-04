<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Memberships_user;

class Membership extends Model
{
    use HasFactory;

    protected $fillable=[
        'membership_name',
        'period',
        'price'
    ];

    public function memberUser():BelongsTo{
        return $this->belongsTo(Memberships_user::class);
    }
}
