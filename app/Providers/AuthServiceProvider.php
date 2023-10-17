<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
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
        $this->registerPassport();
    }

    private function registerPassport()
    {
        Passport::tokensExpireIn(Carbon::now()->addDays(15));
        Passport::personalAccessTokensExpireIn(Carbon::now()->addYears(5));
        Passport::refreshTokensExpireIn(Carbon::now()->addYear());
    }
}
