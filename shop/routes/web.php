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
Route::get('admin', 'Admin\IndexController@index');
Route::any('login', 'Admin\Login\LoginController@login');
Route::any('doLogin', 'Admin\Login\LoginController@doLogin');

Route::any('menu', 'Admin\Menu\MenuController@show');
Route::any('addMenu', 'Admin\Menu\MenuController@index');
Route::any('createMenu', 'Admin\Menu\MenuController@create');
Route::any('menuList', 'Admin\Menu\MenuController@list');

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
Route::post('orderCreate','Admin\orderController@orderCreate');

Route::get('goodsShow','Admin\Goods\CommodityController@goodsShow');
Route::get('goods','Admin\Goods\CommodityController@goods');
Route::get('goodsdel','Admin\Goods\CommodityController@goodsDel');

Route::get('dommodityShow','Admin\Dommodity\DommodityController@dommodityShow');
Route::get('dommoditydel','Admin\Dommodity\DommodityController@dommodityDel');

Route::get('gtypeshow','Admin\Gtype\GtypeController@gtypeShow');
Route::get('gtypedel','Admin\Gtype\GtypeController@gtypeDel');

Route::get('/','IndexController@index');
Route::get('/logins','IndexController@login');
Route::get('/index/register','IndexController@register');
Route::any('/index/regDo','IndexController@regDo');
Route::any('/index/logDo','IndexController@logDo');
Route::any('/index/quit','IndexController@quit');

Route::get('create','IndexController@create');
Route::get('orders','IndexController@store');