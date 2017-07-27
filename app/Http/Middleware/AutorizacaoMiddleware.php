<?php

namespace estoque\Http\Middleware;

use Closure;

class AutorizacaoMiddleware
{
    public function handle($request, Closure $next){
        if(!$request->is('login') && \Auth::guest()) {
            return redirect('login');
        }
        return $next($request);
    }
}
