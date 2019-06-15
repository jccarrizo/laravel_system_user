<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Illuminate\Support\Facades\Redirect;

class UserController extends Controller {

    public function __construct() {
//        $this->middleware(function ($request, $next) {
//            $userRoles = Auth::user()->roles->pluck('name');
//            if ( !$userRoles->contains('User') && !$userRoles->contains('Admin') ) {
////                return redirect('/home');
//                return Redirect::back()->withErrors(['!Acción no permitida!']);
//            }
//            $request->request->add(['role' => 'value']);
//            return $next($request);
//        });
    }

    public function index() {
        return view('user.home');
    }

}
