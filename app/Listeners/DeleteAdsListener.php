<?php

namespace App\Listeners;

use App\Events\DeleteAdsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeleteAdsListener
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
    public function handle(DeleteAdsEvent $event): void
    {
        dd('Hello');
    }
}
