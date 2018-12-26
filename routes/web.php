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
Route::post('/unit/store', 'UnitController@store')->middleware('auth');
Route::get('/addunit/{id}', 'UnitController@add')->middleware('auth');
Route::get('/unit/{id}', 'UnitController@single')->middleware('auth');
Route::post('/unitsale/preview/{id}', 'UnitController@preview')->middleware('auth');
Route::post('/unitsale/store/{id}', 'UnitController@storesale')->middleware('auth');
Route::post('/unitsale/{id}', 'UnitController@addsale')->middleware('auth');
Route::get('/employee', 'EmployeeController@home')->middleware('auth');
Route::get('/employee/add', 'EmployeeController@add')->middleware('auth');
Route::post('/employee/store', 'EmployeeController@store')->middleware('auth');
Route::get('/employee/{id}', 'EmployeeController@single')->middleware('auth');
Route::get('/salary/add/{id}', 'SalaryController@add')->middleware('auth');
Route::post('/salary/store', 'SalaryController@store')->middleware('auth');
Route::get('/salary/{id}', 'SalaryController@single')->middleware('auth');
Route::get('/cclients', 'CclientController@home')->middleware('auth');
Route::get('/cclient/add', 'CclientController@add')->middleware('auth');
Route::post('/cclient/store', 'CclientController@store')->middleware('auth');
Route::get('/cclient/{id}', 'CclientController@single')->middleware('auth');
Route::get('/cmaterials', 'CmaterialController@home')->middleware('auth');
Route::get('/cmaterial/add', 'CmaterialController@add')->middleware('auth');
Route::post('/cmaterial/store', 'CmaterialController@store')->middleware('auth');
Route::get('/cmaterial/{id}', 'CmaterialController@single')->middleware('auth');
Route::get('/csuppliers', 'CsupplierController@home')->middleware('auth');
Route::get('/csupplier/add', 'CsupplierController@add')->middleware('auth');
Route::post('/csupplier/store', 'CsupplierController@store')->middleware('auth');
Route::get('/csupplier/{id}', 'CsupplierController@single')->middleware('auth');
Route::get('/cpurchases', 'CpurchaseController@home')->middleware('auth');
Route::get('/cpurchase/add', 'CpurchaseController@add')->middleware('auth');
Route::get('/cpurchase/store', 'CpurchaseController@store')->middleware('auth');
Route::get('/cpurchase/{id}', 'CpurchaseController@store')->middleware('auth');
Route::get('/installement/pay/{id}', 'UnitController@pay')->middleware('auth');
Route::get('/installement/partial/{id}', 'UnitController@partial')->middleware('auth');
Route::get('/safe/outcome', 'SafeController@index')->middleware('auth');
Route::get('/safe/income', 'SafeController@income')->middleware('auth');

Route::get('/cheque/add/{id}', 'ChequeController@add')->middleware('auth');
Route::get('/cheque/store/{id}', 'ChequeController@store')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
