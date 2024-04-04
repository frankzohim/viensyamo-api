<?php

namespace App\Models;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable=[
        'escort_id',
        'user_id',
        'stars',
        'comment'
    ];

    public function annoncement():BelongsTo{
        return $this->belongsTo(Announcement::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
