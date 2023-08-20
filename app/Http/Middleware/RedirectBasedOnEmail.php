<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (auth()->check()) {
        //     $user = auth()->user();
    
        //     if ($user->role === 'admin') {
        //         return redirect()->route('admin.dashboard');
        //     } else {
        //         return redirect()->route('user.dashboard');
        //     }
        // }
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->email === 'ame@gmail.com') {
                // return redirect()->route('admin');
                return "abc";
            } else {
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
