<?php
namespace App\Http\Middleware;
use App\Http\Middleware;
use Closure;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isAdmin()){
            return $next($request);
        }
        return redirect('/');
    }
}
