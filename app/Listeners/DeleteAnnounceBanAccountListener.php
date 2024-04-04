<?php

namespace App\Listeners;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeleteAnnounceBanAccountListener
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
    public function handle(object $event): void
    {
        $users=User::where('suspended_at','!=',null)->get();
        foreach($users as $user){
            $announcement=Announcement::where('user_id',$user->id)->first();
            $announcement->status=0;
            $announcement->save();
        }
    }

}
