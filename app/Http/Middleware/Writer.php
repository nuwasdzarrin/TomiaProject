<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class Writer
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user->role_id != 3){
            abort(404);
        }else{
            return $next($request);
        }
    }
}
