<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Regis
     * ter any application services.
     */
    protected $policies = [
        // Add any policy mappings here if needed
    ];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->hasRole('Admin');
        });

        Gate::define('supervisor', function ($user) {
            return $user->hasRole('Supervisor');
        });
    }
}
