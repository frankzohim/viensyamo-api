<?php

namespace App\Models;
use App\Models\Town;
use App\Models\User;
use App\Models\Image;
use App\Models\Quarter;
use App\Models\Announcement_visit;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\Models\AnnouncementCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Announcement extends Model implements Searchable
{
    use HasFactory;

protected $fillable=[
        'user_id',
        'town_id',
        'quarter_id',
        'announcement_category_id',
        'status',
        'isSubscribe',
        'gender',
        "age",
        'whatsapp',
        'slug',
        'title',
        'subscribe_id',
        'description',
        'accepted',
        'location'
    ];
    public function town():BelongsTo{
        return $this->belongsTo(Town::class);
    }

    public function quarter():BelongsTo{
        return $this->belongsTo(Quarter::class);
    }

    public function images():BelongsToMany{
        return $this->belongsToMany(Image::class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(AnnouncementCategory::class, 'announcement_category_id','id' );
    }

    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function visits():HasMany{
        return $this->hasMany(Announcement_visit::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('announces.show', $this->id);
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url,
         );
    }




}
