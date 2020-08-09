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
    Route::post('/categories/delete-selected','Backend\CategoryController@deleteSelected')->name('categories.deleteSelected');
    Route::post('/categories/active-selected','Backend\CategoryController@activeSelected')->name('categories.activeSelected');
    Route::post('/products/delete-selected','Backend\ProductController@deleteSelected')->name('products.deleteSelected');
    Route::post('/products/active-selected','Backend\ProductController@activeSelected')->name('products.activeSelected');
    Route::post('/products/highlight-selected','Backend\ProductController@highlightSelected')->name('products.highlightSelected');
    Route::post('/products/unhighlight-selected','Backend\ProductController@unhighlightSelected')->name('products.unhighlightSelected');
});

Route::get('/', 'Frontend\SiteController@index');
Route::get('/product/{id}', 'Frontend\SiteController@productDetail')->name('productDetail');
Route::get('/category/{id}', 'Frontend\SiteController@category')->name('product');
