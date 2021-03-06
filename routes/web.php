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
Route::get('/partners', 'PartnerController@home')->middleware('auth');
Route::get('/partners/add', 'PartnerController@add')->middleware('auth');
Route::get('/partners/store', 'PartnerController@store')->middleware('auth');
Route::get('/addpartner/{id}', 'LandController@addpartner')->middleware('auth');
Route::get('/landpartner/store', 'LandController@storepartner')->middleware('auth');
Route::get('/contractor/add', 'ContractorController@add')->middleware('auth');
Route::get('/contractors', 'ContractorController@home')->middleware('auth');
Route::get('/contractor/store', 'ContractorController@store')->middleware('auth');
Route::get('/items', 'ItemController@home')->middleware('auth');
Route::get('/item/add', 'ItemController@add')->middleware('auth');
Route::get('/item/store', 'ItemController@store')->middleware('auth');
Route::get('/work/add', 'WorkController@add')->middleware('auth');
Route::get('/works', 'WorkController@home')->middleware('auth');
Route::get('/works/store', 'WorkController@store')->middleware('auth');
Route::get('/suppliers', 'SupplierController@home')->middleware('auth');
Route::get('/supplier/add', 'SupplierController@add')->middleware('auth');
Route::get('/supplier/store', 'SupplierController@store')->middleware('auth');
Route::get('/purchases', 'PurchaseController@home')->middleware('auth');
Route::get('/purchase/add', 'PurchaseController@add')->middleware('auth');
Route::get('/purchase/store', 'PurchaseController@store')->middleware('auth');
Route::get('/materials', 'MaterialController@home')->middleware('auth');
Route::get('/material/add', 'MaterialController@add')->middleware('auth');
Route::get('/material/store', 'MaterialController@store')->middleware('auth');
Route::get('/clients', 'ClientController@home')->middleware('auth');
Route::get('/client/add', 'ClientController@add')->middleware('auth');
Route::get('/client/store', 'ClientController@store')->middleware('auth');
Route::get('/units', 'UnitController@home')->middleware('auth');
Route::get('/unit/add', 'UnitController@add')->middleware('auth');
Route::get('/unit/store', 'UnitController@store')->middleware('auth');
Route::get('/addunit/{id}', 'UnitController@add')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
