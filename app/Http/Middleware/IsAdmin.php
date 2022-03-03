<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { /*Verifie si un utilisateur est connecté, et si il est admin, sinon le redirige sur la page d'accueuil */
        if (Auth::user() &&  Auth::user()->admin == 1) {
            return $next($request);
     }

    return redirect(route('accueil'));
    }
}
