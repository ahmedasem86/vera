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
    return view('adminlte::auth.login');
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/land', 'LandController@home')->middleware('auth');
Route::get('/land/add', 'LandController@add')->middleware('auth');
Route::get('/land/store', 'LandController@store')->middleware('auth');
Route::get('/land/{id}', 'LandController@single')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
