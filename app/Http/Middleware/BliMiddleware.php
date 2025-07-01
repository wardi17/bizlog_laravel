<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BliMiddleware
{
   public function handle(Request $request, Closure $next)
{
    if ($request->routeIs('set.locale') || 
        $request->is('Tentang_Kami') || 
        $request->is('Depot_Parkir') || 
        $request->is('Pencucian_Kontainer') || 
        $request->is('Perbaikan') || 
        $request->is('Pergerakan_Kontainer') || 
        $request->is('Struktur_Organisasi') || 
        $request->is('Kantin') || 
        $request->is('Kontak') ||
        $request->is('login') ||
        $request->is('logout') ||
        $request->is('index')) 
    {
        return $next($request); // Izinkan akses tanpa login
    }

    if (!$request->user()) {
        return redirect('/login');
    }

    return $next($request);
}

}
