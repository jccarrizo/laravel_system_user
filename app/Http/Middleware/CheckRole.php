<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\Redirect;

class CheckRole {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function is_serialized($string) {
        return (@unserialize($string) !== false);
    }

    public function handle($request, Closure $next, $role) {
        if ($this->is_serialized($role)) {
            $roles = unserialize($role);            
            if (!$request->user()->hasAnyRole($roles)) {
                return Redirect::back()->withErrors(['¡No tienes autorización para ingresar!']);
            }
        }else
        if (!$request->user()->hasRole($role)) {
            return Redirect::back()->withErrors(['¡No tienes autorización para ingresar!']);
        }
//         return ($request->user()->roles->first()->descripcion);
//        $role = ($request->user()->roles->first());
//        $request->request->add(['role' => $role]);
        return $next($request);
    }

}
