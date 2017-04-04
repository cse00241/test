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


Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

//Route::get('/home', 'HomeController@index');

/* frontend part for my shop */
Route::get('/', 'FrontendController@myhome');
Route::get('/home', 'FrontendController@myhome');
Route::get('/products', 'FrontendController@products');
Route::get('/topbrands', 'FrontendController@topbrands');
Route::get('/cart', 'FrontendController@cart');
Route::get('/contact', 'FrontendController@contact');
Route::get('/login', 'FrontendController@login');
Route::get('/search', 'FrontendController@search');
Route::post('/add_cart', 'FrontendController@add_cart');



/* backend part for my shop */
Route::get('/myadmin', 'BackendController@myadmin');
/*Route::get('/categories', 'BackendController@categories');
Route::get('/brands', 'BackendController@brands');
Route::get('/products-management', 'BackendController@products');
Route::get('/orders', 'BackendController@order');*/




/* Admin Resource Controller*/
Route::resource('slider', 'SliderController');
Route::resource('categories', 'CategoryController');
Route::resource('brands', 'BrandsController');
Route::resource('products-management', 'ProductsController');
Route::resource('orders', 'OrdersController');
Route::resource('attribute', 'Attribute_Controller');
Route::resource('attribute_set', 'Attribute_set_Controller');
Route::post('attribute_ajax', 'ProductsController@attribute_ajax');


Route::put('categories/publish/{id}', 'CategoryController@publish');
Route::put('categories/unpublish/{id}', 'CategoryController@unpublish');

Route::put('brands/publish/{id}', 'BrandsController@publish');
Route::put('brands/unpublish/{id}', 'BrandsController@unpublish');

Route::put('product/publish/{id}', 'ProductsController@publish');
Route::put('product/unpublish/{id}', 'ProductsController@unpublish');


Route::put('slider/publish/{id}', 'SliderController@publish');
Route::put('slider/unpublish/{id}', 'SliderController@unpublish');

Route::get('test','test@ajax');
Route::post('test_ajax','test@test_ajax');
