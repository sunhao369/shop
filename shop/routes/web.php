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
//Route::get('index', 'Admin\Admin1Controller@indexAdmin');
Route::get('list', 'Admin\AdminController@index');
Route::get('create', 'Admin\AdminController@create');
Route::any('store', 'Admin\AdminController@store');
Route::get('index', 'Admin\IndexController@index');
Route::any('login', 'Login\LoginController@login');
Route::any('doLogin', 'Login\LoginController@doLogin');

Route::any('menu', 'Menu\MenuController@show');
Route::any('addMenu', 'Menu\MenuController@index');
Route::any('createMenu', 'Menu\MenuController@create');
Route::any('menuList', 'Menu\MenuController@list');

Route::get ('warehouse/list','Admin\WarehouseController@index');
Route::get ('warehouse/create','Admin\WarehouseController@create');
Route::any('/warehouse/store', 'Admin\WarehouseController@store');
Route::get('/warehouse/edit', 'Admin\WarehouseController@edit');
Route::any('/warehouse/update', 'Admin\WarehouseController@update');
Route::get('/warehouse/destroy','Admin\WarehouseController@destroy');

Route::get('userShow','Admin\UsersController@userShow');
Route::post('upload','Admin\UsersController@userUpload');
Route::get('user','Admin\UsersController@user');
Route::get('userdel','Admin\UsersController@userdel');
Route::post('userAdd','Admin\UsersController@userAdd');


Route::get('order','Admin\OrderController@order');
Route::get('ordershow','Admin\OrderController@ordershow');
Route::get('orderadd','Admin\OrderController@orderadd');
Route::get('orderdel','Admin\OrderController@orderdel');
Route::post('orderCreate','Admin\OrderController@orderCreate');



Route::get('/','IndexController@index');
Route::get('index/login','IndexController@login');
Route::get('/index/register','IndexController@register');
Route::any('/index/regDo','IndexController@regDo');
Route::any('/index/logDo','IndexController@logDo');
Route::any('/index/quit','IndexController@quit');
Route::get('/personage/index','PersonageController@index');
Route::get('/personage/order','PersonageController@order');
Route::get('/personage/cart','PersonageController@cart');
Route::get('/personage/check','PersonageController@check');
Route::get('/personage/pay','PersonageController@pay');
Route::get('/personage/address','PersonageController@address');
Route::get('/personage/recommend','PersonageController@recommend');
Route::get('/personage/dpayment','PersonageController@dpayment');