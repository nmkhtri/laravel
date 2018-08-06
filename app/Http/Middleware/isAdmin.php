<?php

namespace samenta\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        if(Auth::check()) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                echo 'you are admin';
            } else {
                echo 'you are not admin';
            }
        }
        else{
            return $next($request);
        }
    }
}
