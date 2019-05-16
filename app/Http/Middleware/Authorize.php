<?php

namespace App\Http\Middleware;

use Closure;
use \App\User;

class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::find(auth()->id());
        if(!$user->isAdmin()) abort(403);
        return $next($request);
    }
}
