<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa jika pengguna sudah login DAN BUKAN seorang 'user'
        if (auth()->check() && auth()->user()->role !== 'user') {
            // Jika dia admin, alihkan ke dashboard admin.
            // Jika ada peran lain di masa depan, ini juga akan mengalihkan mereka.
            return redirect()->route('admin.dashboard');
        } 

        // Jika dia adalah 'user', izinkan akses.
        return $next($request);
    }
}