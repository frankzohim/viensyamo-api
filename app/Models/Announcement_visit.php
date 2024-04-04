<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement_visit extends Model
{
    use HasFactory;

    protected $fillable=[
        'announcement_id'
    ];
}
