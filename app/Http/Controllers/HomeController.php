<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(8)->get();
        return view('landingView', compact('products'));
    }

    public function showProduct($id)
    {
        $product = Product::find($id);
        return view('singleProductView', compact('product'));
    }
}
