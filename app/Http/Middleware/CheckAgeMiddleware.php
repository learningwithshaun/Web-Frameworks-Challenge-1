<?php

//Student name: Amanda Msutu
//Student number: 2224286000
//Web Frameworks: Challenge 1 - Bookstore App

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');

        if (!$age || $age < 18) {
            return redirect('/')->with('error', 'You must be 18 or older to access this page.');
        }

        return $next($request);
    }
}