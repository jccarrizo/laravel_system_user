<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Illuminate\Support\Facades\Redirect;
class AdminController extends Controller {

    public function __construct() {
//        $this->middleware(function ($request, $next) {
//            $userRoles = Auth::user()->roles->pluck('name');
//            if (!$userRoles->contains('Admin')) {
////                return redirect('/home');
//                return Redirect::back()->withErrors(['Usted no tiene acceso!']);
//            }
//            return $next($request);
//        });
    }

    public function index() {
//        $user = Auth::user();
//        
//        $name=$user->name;
////        $roles = $user->getRoles();
//        dd($name);
        return view('admin.home');
    }

}
