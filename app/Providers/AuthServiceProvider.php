<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role->name == 'admin';
        });
        Gate::define('isManager', function ($user) {
            return $user->role->name == 'manager';
        });
        Gate::define('isGm', function ($user) {
            return $user->role->name == 'gm';
        });
        Gate::define('isBranch', function ($user) {
            return $user->role->name == 'branch';
        });
    }
}
