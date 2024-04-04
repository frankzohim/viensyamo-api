<?php

namespace App\Listeners;

use App\Events\EventActivateAnnouncement;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenerActivateAnnouncement
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
    public function handle(EventActivateAnnouncement $event): void
    {
        $id=$event->id;
        $user=User::find($id);
        $announcements=Announcement::all();
        foreach($announcements as $announcement){
            if($announcement->user_id===$user->id){
                $announcement->status=1;
                $announcement->save();
            }
        }
    }
}
