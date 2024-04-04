<?php

namespace App\Listeners;

use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerCheckUpgradePlan
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

    $expiredSubscriptions = Member::where('expire_at', '<', $today)->get();

    foreach ($expiredSubscriptions as $subscription) {
        // Mettre à jour l'abonnement expiré
        $user=User::find($subscription->user_id);
        Member::destroy($subscription->id);
        $subscription->update(['status' => 0]);
        $user->isSubscribe=0;
        $user->save();

        // Envoyer un email ou une notification à l'utilisateur

    }
    }
}
