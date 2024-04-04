<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Passport::tokensCan([
            'customer' => 'User',
            'escort' => 'User',
            'admin' => 'User',
        ]);
        Passport::personalAccessClient(
            config('passport.personal_access_client.id')
        );
	Passport::tokensExpireIn(now()->addMonths(6));
    Passport::refreshTokensExpireIn(now()->addMonths(7));
    Passport::personalAccessTokensExpireIn(now()->addMonths(6));
        Passport::personalAccessClient(
            config('passport.personal_access_client.secret')
        );

    }
}
