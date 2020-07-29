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

Route::get('/', function () {
    $categories = \App\Category::all()->where('status','=',1);
    $collections = \App\Collection::all()->where('status','=',1);
    $products = \App\Product::all()->where('status','=',1);
    return view('frontend.index',['categories'=>$categories,'collections'=>$collections,'products'=>$products]);
});

