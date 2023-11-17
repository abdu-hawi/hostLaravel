<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        app()->setLocale(app('lang'));
        if (!session()->has('lang') || session('lang') != 'ar') {
            if(session('lang') != 'ar'){
                session()->forget('lang');
            }
            session()->put('lang', 'ar');
            return redirect(route('lang', 'ar'));
        }

        return $next($request);
    }
}
