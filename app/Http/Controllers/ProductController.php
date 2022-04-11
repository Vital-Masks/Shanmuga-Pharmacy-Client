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

    public function search(Request $request){

        $pagination = 8;
        
        $categories = Category::all();

        $query = $request->search;
        $products = Product::with('productImages')->where('name','LIKE', "%$query%")->paginate($pagination);

        // dd($products);
        
        return view('productsView')->with([
            'products' => $products,
            'categories' => $categories
            ]);
    }
}
