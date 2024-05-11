<?php

namespace App\Providers;

use App\Policies\MenuPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $this->registerPolicies();
        Gate::define('view-menu', [MenuPolicy::class, 'viewMenu']);
    }
}
