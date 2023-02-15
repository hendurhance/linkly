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
            if (Auth::guard('admin')->check()) {
                if ($request->is('admin/*')) {
                    return route('admin.auth.login');
                }
            } elseif (Auth::guard('web')->check()) {
                if ($request->is('/*')) {
                    return route('home');
                }
            } else {
                return route('login');
            }
        }
    }
}
