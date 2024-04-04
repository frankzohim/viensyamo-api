<?php

namespace App\Models;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementCategory extends Model
{
    use HasFactory;

     public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }
}
