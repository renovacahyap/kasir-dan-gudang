<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
           if (auth()->user()->status == 1 or auth()->user()->status == 2) {
            # code...
            return $next($request);
           }

           return redirect('/pembelian');
            
        }
        
        return redirect('/login');
            
    }
}
