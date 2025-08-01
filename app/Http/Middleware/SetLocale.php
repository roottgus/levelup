<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // 1) Tomamos el locale de la sesión (o fallback al config/app.php)
        $locale = session('locale', config('app.locale'));

        // 2) Se lo seteamos a la aplicación
        App::setLocale($locale);

        return $next($request);
    }
}
