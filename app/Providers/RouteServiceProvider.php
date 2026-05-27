<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        $this->routes(function () {

            /*
            |--------------------------------------------------------------------------
            | Web Routes
            |--------------------------------------------------------------------------
            |
            | These routes load normal web pages like checkout, upsell pages,
            | and thank you page.
            |
            */

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            /*
            |--------------------------------------------------------------------------
            | Funnel Routes
            |--------------------------------------------------------------------------
            |
            | These routes handle checkout form submission, upsell ajax calls,
            | and other funnel actions.
            |
            */

            Route::middleware('web')
                ->group(base_path('routes/funnel.php'));

            /*
            |--------------------------------------------------------------------------
            | API Routes
            |--------------------------------------------------------------------------
            |
            | These routes are typically stateless APIs.
            |
            */

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
