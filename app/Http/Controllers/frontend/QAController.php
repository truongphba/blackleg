<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Product;
use App\QA;
use Illuminate\Http\Request;

class QAController extends Controller
{
    public function index(){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        $qa = QA::all()->where('status', '=', 1);
        return view('/frontend.QA')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections)
            ->with('qa', $qa);
    }
}
