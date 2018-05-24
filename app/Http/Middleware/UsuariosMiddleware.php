<?php

namespace App\Http\Middleware;

use Closure;
use App\Permitido;
class UsuariosMiddleware
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
        if (Permitido::where('usu_permitidos',$request->input('usuario'),'permiso')->first()!=0 ) {


            return $next($request);
        }

            return redirect('sinpermiso');



    }
}
