<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $adminGuard = 'admin';
            $webGuard = 'web';
            $currentRoute = $request->route()->getName();

            // Check if the user is within the admin route or was previously authenticated with the admin guard
            if (strpos($currentRoute, $adminGuard) === 0 || Auth::guard($adminGuard)->check()) {
                return route('admin.auth.login');
            }

            // Check if the user is within the user route (/) and is not authenticated
            if ($currentRoute === 'home' && Auth::guard($webGuard)->guest()) {
                return route('login');
            }

            // If the user is authenticated and not in the admin route or is in the user route and is authenticated, redirect to the home route
            return route('home');
        }
    }
}
