<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'admin','as'=>'backend.'], function(){
    Route::get('/', ['as' => 'index', 'uses' => 'Backend\SiteController@index']);
    Route::resource('products','Backend\ProductController');
    Route::resource('categories','Backend\CategoryController');
    Route::resource('collections','Backend\CollectionController');
    Route::post('/categories/delete-selected','Backend\CategoryController@deleteSelected')->name('categories.deleteSelected');
});

Route::get('/', 'Frontend\SiteController@index');//removeProduvtInCart
Route::get('/checkout', 'Frontend\SiteController@checkout');
Route::post('/cart', 'Frontend\SiteController@cart');
Route::post('/removeProductInCart', 'Frontend\SiteController@removeProductInCart');
Route::post('/showCart', 'Frontend\SiteController@showCart');
Route::get('/product/{id}', 'Frontend\ProductController@productDetail')->name('productDetail');
//Route::get('/category/{id}', 'Frontend\CategoryController@category')->name('product');
//Route::get('/collection/{id}', 'Frontend\CollectionController@collection')->name('collection');
Route::get('/all-product', 'Frontend\ProductController@allProduct')->name('all-product');
Route::get('/contact', 'Frontend\ContactController@index');
Route::post('/contact', 'Frontend\ContactController@createContact');
Route::get('/qa', 'Frontend\QAController@index');
