<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Vérifie si l'utilisateur est connecté
        $user = $request->user();

        if (!$user) 
        {
            // Si l'utilisateur n'est pas connecté et pas sur la page de connexion
            if(!$request->is('login'))
            {
                // redirige vers la page de connexion
                return redirect()->route('login'); 
            }
        }

        else 
        {
            // Vérifie si le role de l'utilisateur est autorisé
            if (!in_array($user->role, $roles)) {               
                return redirect()->route('loginAuth');
            }
        }

        return $next($request);
    }
}
