<?php

namespace App\Models;

use App\Models\Escort;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        'phone',
        'message',
        'status',
        'path'
    ];
    public function escort():BelongsToMany{
        return $this->belongsToMany(Escort::class);
    }

    public function ads(){
        return $this->belongsToMany(Announcement::class);
    }
}
