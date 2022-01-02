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
     
        $products = Product::with('medicineImages')->orderByDesc('id')->paginate($pagination);
        
        return view('productsView', compact('categories','products'));
    }
}