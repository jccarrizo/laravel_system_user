<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::group(['middleware'=>['auth']], function(){
//    Route::get('/user','UserController@index')->name('user');
//    Route::get('/admin','AdminController@index')->name('admin');
//})->middleware('auth', 'role:admin');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/test', 'HomeController@index')->name('test');



Route::prefix('admin')->middleware('auth', 'role:admin')->group(function () {
    Route::get('/','AdminController@index')->name('admin-home');
});
Route::prefix('user')->middleware('auth', 'role:'.serialize(['user','admin']).'')->group(function () {
    Route::get('/','UserController@index')->name('user-home');
});



