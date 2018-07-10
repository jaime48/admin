<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CheckPermission
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
        $this->routeCheck($request);
        return $next($request);
    }

    /**
     * @param Request $request
     * check permission on route
     */
    public function routeCheck(Request $request)
    {
        Log::info($request);
        if(array_key_exists($request->path(), config('permissionRoute'))){
            Log::info(config('permissionRoute')[$request->path()]);
            Log::info($request->path());
            if($request->user()->permission > config('permissionRoute')[$request->path()]){
                abort(403);
            }
        }
    }

}
