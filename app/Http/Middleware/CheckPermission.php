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

    public function routeCheck(Request $request) {

        if(array_key_exists($request->path(), config('permissionRoute'))){
            Log::info(config('permissionRoute')[$request->path()]);
            Log::info($request->user()->permission);
            if($request->user()->permission > config('permissionRoute')[$request->path()]){
                abort(403);
            }
        }
    }
}
