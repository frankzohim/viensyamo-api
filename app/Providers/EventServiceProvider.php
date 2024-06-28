<?php

namespace App\Providers;

use App\Events\AnnouncementVisitEvent;
use App\Events\DeleteAnnounceBanAccountEvent;
use App\Events\EventActivateAnnouncement;
use App\Events\EventCheckAdsSubscribe;
use App\Events\EventCheckCreditSubscribe;
use App\Events\EventCheckExpire;
use App\Events\EventCheckPlanSubscribe;
use App\Events\EventCheckSubscription;
use App\Events\EventCheckUpgradePlan;
use App\Events\MakePayment;
use App\Events\ProfileUserEvent;
use App\Events\DeleteAdsEvent;
use App\Listeners\AnnouncementVisitListener;
use App\Listeners\DeleteAnnounceBanAccountListener;
use App\Listeners\ListenerActivateAnnouncement;
use App\Listeners\ListenerCheckAdsSubscribe;
use App\Listeners\ListenerCheckCreditSubscribe;
use App\Listeners\ListenerCheckExpire;
use App\Listeners\ListenerCheckPlanSubscribe;
use App\Listeners\ListenerCheckSubscription;
use App\Listeners\ListenerCheckUpgradePlan;
use App\Listeners\MakePayment as ListenersMakePayment;
use App\Listeners\ProfileUserListener;
use App\Listeners\DeleteAdsListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
         MakePayment::class => [
            ListenersMakePayment::class,
        ],
        DeleteAdsEvent::class => [
            DeleteAdsListener::class,
        ],
        EventCheckSubscription::class=>[
            ListenerCheckSubscription::class,
        ],
       EventCheckExpire::class=>[
        ListenerCheckExpire::class
       ],
       EventCheckUpgradePlan::class=>[
        ListenerCheckUpgradePlan::class
       ],
       AnnouncementVisitEvent::class=>[
        AnnouncementVisitListener::class
       ],
       DeleteAnnounceBanAccountEvent::class=>[
        DeleteAnnounceBanAccountListener::class
       ],
       EventActivateAnnouncement::class=>[
        ListenerActivateAnnouncement::class
       ],
       EventCheckAdsSubscribe::class=>[
        ListenerCheckAdsSubscribe::class
       ],
       EventCheckCreditSubscribe::class=>[
        ListenerCheckCreditSubscribe::class
       ],
       EventCheckPlanSubscribe::class=>[
        ListenerCheckPlanSubscribe::class
       ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
