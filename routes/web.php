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
    Route::resource('q_a_s','Backend\QAController');
    Route::resource('contacts','Backend\ContactController');
    Route::post('/collections/delete-selected','Backend\CollectionController@deleteSelected')->name('collections.deleteSelected');
    Route::post('/collections/active-selected','Backend\CollectionController@activeSelected')->name('collections.activeSelected');
    Route::post('/products/delete-selected','Backend\ProductController@deleteSelected')->name('products.deleteSelected');
    Route::post('/products/active-selected','Backend\ProductController@activeSelected')->name('products.activeSelected');
    Route::post('/products/highlight-selected','Backend\ProductController@highlightSelected')->name('products.highlightSelected');
    Route::post('/products/unhighlight-selected','Backend\ProductController@unhighlightSelected')->name('products.unhighlightSelected');
    Route::post('/categories/delete-selected','Backend\CategoryController@deleteSelected')->name('categories.deleteSelected');
    Route::post('/categories/active-selected','Backend\CategoryController@activeSelected')->name('categories.activeSelected');
    Route::post('/q_a_s/delete-selected','Backend\QAController@deleteSelected')->name('q_a_s.deleteSelected');
    Route::post('/q_a_s/active-selected','Backend\QAController@activeSelected')->name('q_a_s.activeSelected');
});

Route::get('/', 'Frontend\SiteController@index');//removeProduvtInCart
Route::get('/checkout', 'Frontend\SiteController@checkout');
Route::get('/about', 'Frontend\SiteController@about');
Route::post('/cart', 'Frontend\SiteController@cart');
Route::post('/removeProductInCart', 'Frontend\SiteController@removeProductInCart');
Route::post('/showCart', 'Frontend\SiteController@showCart');
Route::get('/product/{id}', 'Frontend\ProductController@productDetail')->name('productDetail');
Route::post('/saveOrder', 'Frontend\SiteController@saveOrder');

Route::get('/category/{id}', 'Frontend\CategoryController@category')->name('product');
Route::get('/collection/{id}', 'Frontend\CollectionController@collection')->name('collection');
//
Route::get('/all-product', 'Frontend\ProductController@allProduct')->name('all-product');
Route::get('/contact', 'Frontend\ContactController@index');
Route::post('/contact', 'Frontend\ContactController@createContact');
Route::get('/qa', 'Frontend\QAController@index');
