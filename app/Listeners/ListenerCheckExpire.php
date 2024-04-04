<?php

namespace App\Listeners;

use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerCheckExpire
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
        $today = Carbon::now();

        $expiredAnnoncement = Announcement::where('expire', '<', $today)->get();
        foreach ($expiredAnnoncement as $announcement) {
            // Mettre à jour l'abonnement expiré
            $announcement->status=0;
            $announcement->isSubscribe=0;
            $announcement->expire=null;
            $announcement->save();

            // Envoyer un email ou une notification à l'utilisateur

        }

    }
}
