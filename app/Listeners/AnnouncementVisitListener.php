<?php

namespace App\Listeners;

use App\Events\AnnouncementVisitEvent;
use App\Models\Announcement_visit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AnnouncementVisitListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AnnouncementVisitEvent $event): void
    {
        Announcement_visit::create([
            'announcement_id'=>$event->announcement->id,
        ]);
    }
}
