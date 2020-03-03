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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/add_category/', 'CategoryController@addCategory');
Route::get('/add_product/', 'ProductController@adProduct');
Route::get('/category_management/', 'CategoryController@manageCategory');
Route::get('/product_management/', 'ProductController@manageProduct');
Route::get('/orders_management/', 'HomeController@manageOrders');
Route::get('/category_delete/{category}', 'CategoryController@categoryDelete');
Route::post('/store_category/', 'CategoryController@storeCategory'); /*parodo html forma*/
Route::post('/store_product', 'ProductController@storeProduct'); /*parodo html forma*/