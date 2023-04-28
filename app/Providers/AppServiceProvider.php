<?php

namespace App\Providers;

use App\Models\AIModel;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('parsedown', function () {
            return new \Parsedown();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share("ai_versions", AIModel::all());
    }
}
