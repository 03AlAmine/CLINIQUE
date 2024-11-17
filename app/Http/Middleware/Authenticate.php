<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        // Si l'utilisateur est déjà authentifié et essaie d'accéder à la page 'login'
        if (Auth::check() && $request->route()->getName() == 'login') {
            return redirect()->route('home');  // Redirige vers la page d'accueil
        }

        return parent::handle($request, $next, ...$guards);  // Appelle la méthode parent avec les bons paramètres
    }
}
