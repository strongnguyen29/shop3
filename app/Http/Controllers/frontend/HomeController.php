<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index() {

        $products = Product::getProductsOnHome();
        return view('frontend.home', compact('products'));
    }
}
