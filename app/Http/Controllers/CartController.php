<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        return view('cartView');
    }

    public function store(Request $request)
    {

        $product = Product::find($request->id);
        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $request->id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    // "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);


            // Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Models\Product');
            return redirect()->route('cart')->with('success_message', "Item was added to cart");
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success_message', 'Product added to cart successfully!');
        }
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        // echo "<pre>";
        // print_r($request->all());
        // die;

        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $request->id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $request->price,

                    // "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
            $cart[$request->id]['price'] = $cart[$request->id]['price']  + $request->price;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$request->id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $request->price,
            // "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }

    public function remove($request)
    {

        if ($request) {
            $cart = session()->get('cart');
            if (isset($cart[$request])) {
                unset($cart[$request]);
                session()->put('cart', $cart);
            }
            return redirect()->route('cart')->with('success', 'Product removed successfully!');
        }
    }
}
