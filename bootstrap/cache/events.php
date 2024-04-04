<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'App\\Events\\MakePayment' => 
    array (
      0 => 'App\\Listeners\\MakePayment',
    ),
    'App\\Events\\EventCheckSubscription' => 
    array (
      0 => 'App\\Listeners\\ListenerCheckSubscription',
    ),
    'App\\Events\\EventCheckExpire' => 
    array (
      0 => 'App\\Listeners\\ListenerCheckExpire',
    ),
    'App\\Events\\EventCheckUpgradePlan' => 
    array (
      0 => 'App\\Listeners\\ListenerCheckUpgradePlan',
    ),
    'App\\Events\\AnnouncementVisitEvent' => 
    array (
      0 => 'App\\Listeners\\AnnouncementVisitListener',
    ),
  ),
);