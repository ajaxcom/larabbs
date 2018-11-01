<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RecordLastActivedTime
{

    public function handle($request, Closure $next)
    {
        //如果是登陆用户的花
        if (Auth::check())
        {
            Auth::user()->RecordLastActivedAt();
        }
        return $next($request);
    }
}
