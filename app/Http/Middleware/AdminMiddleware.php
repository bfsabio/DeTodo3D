<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(auth()->check() && auth()->user()->name =='admin')
        return $next($request); //si el uauario es administrador pasa

      return redirect('/home'); //si no. lo lleva va a esta pagina
    }
}
