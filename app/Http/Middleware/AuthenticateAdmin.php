<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateAdmin extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }

     public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->isAdmin())
        {
            return $next($request);
        }
        return new RedirectResponse(url('/'));
    }
}

