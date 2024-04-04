<?php

namespace App\Models;

use App\Models\Escort;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory;

    public function escort():BelongsToMany{
        return $this->belongsToMany(Escort::class);
    }

    public function ads(){
        return $this->belongsToMany(Announcement::class);
    }
}
