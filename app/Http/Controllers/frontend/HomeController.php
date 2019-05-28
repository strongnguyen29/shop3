<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index() {
        $titlePage = 'SẢN PHẨM MỚI';
        $products = Product::getProductsOnHome();
        return view('frontend.home', compact('products', 'titlePage'));
    }

    function category($category_slug) {

        $category = Category::query()
            ->select(['id','name'])
            ->where('slug','=', $category_slug)
            ->first();
        $products = Product::getProductsByCategory($category->id);
        $titlePage = $category->name;
        return view('frontend.home', compact('products', 'titlePage'));
    }
}
