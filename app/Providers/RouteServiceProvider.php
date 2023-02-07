<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The namespace for "controllers" for your application
     * 
     * Typically, the variable points to where the controllers are.
     * @var string
     */
    protected $namespace = 'App\Http\Controller';

    /**
     * The routes for web
     * 
     * This consists of the users and admin route mapping
     */
    public function mapWebRoutes()
    {
        # Define Users Route
        Route::middleware('web')
            ->namespace($this->namespace.'\User')
            ->group(base_path('routes/web/user.php'));

        # Define Admin Routes
        Route::middleware('web')
            ->namespace($this->namespace.'\Admin')
            ->prefix('admin')
            ->group(base_path('routes/web/admin.php'));
    }

    protected function mapApiRoutes()
    {
        Route::middleware('api')
            ->namespace($this->namespace.'\API')
            ->prefix('api/v1')
            ->group(base_path('routes/api/v1/api.php'));
    }

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->mapWebRoutes();

        $this->mapApiRoutes();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
