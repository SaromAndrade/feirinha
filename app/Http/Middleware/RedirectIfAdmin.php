<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $routeMiddleware = [
   'RedirectIfAdmin' => \App\Http\Middleware\RedirectIfAdmin::class,];
}
