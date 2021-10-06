<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $pagination = 8;
        $categories = Category::all();
        if(request()->category){
            $products = Product::with('productImages')->where('category_id', request()->category)->paginate($pagination);
        }else{
            $products = Product::with('productImages')->orderByDesc('id')->paginate($pagination);
        }
        return view('productsView', compact('categories','products'));
    }
}