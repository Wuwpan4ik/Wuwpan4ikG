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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (AIModel::take(1)->get()) {
            View::share("ai_versions", AIModel::all());
        }
    }
}
