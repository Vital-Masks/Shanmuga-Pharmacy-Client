<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 10;
        $products = Product::latest()->paginate($pagination);
        return view('admin.productsView', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $images[] = new ProductImage();
        $action = URL::route('admin-products.store');
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.productsFormView', compact('product', 'action', 'images', 'categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();

        $productArray = [
            'name' => $request['name'],
            'brand_id' => $request['brand_id'],
            'discount' => $request['discount'],
            'category_id' => $request['category_id'],
            'description' => $request['description'],
        ];

        $product = $product->create($productArray);

        // // upload multi image
        if ($request->hasfile('image_url')) {
            $images = new ProductImage();
            $images = $request->file('image_url');
            foreach ($images as $image) {
                $image_ext = $image->getClientOriginalExtension();
                $filename = rand(111, 99999) . "." . $image_ext;
                $folder = '/img/products/';
                $filePath = $folder . $filename;
                $array[] = ['image_url' => $filePath];
                $image->move(public_path($folder), $filename);
            }
            $product->productImages()->createMany($array);
        }
        if ($request['price_one']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_one'];
            $productDetails->weight = $request['weight_one'];
            $productDetails->save();
        }
        if ($request['price_two']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_two'];
            $productDetails->weight = $request['weight_two'];
            $productDetails->save();
        }
        if ($request['price_three']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_three'];
            $productDetails->weight = $request['weight_three'];
            $productDetails->save();
        }
        return redirect()->route('admin-products.index')->with('flash_message_success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.productsDetailsView', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $action = URL::route('admin-products.update', $product->id);
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.productsFormView', compact('product', 'action', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        // echo "<pre>"; print_r($request->all()); die;

        $product->update($request->all());
        $product->productDetails()->delete();

        if ($request['price_0']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_0'];
            $productDetails->weight = $request['weight_0'];
            $productDetails->save();
        }
        if ($request['price_1']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_1'];
            $productDetails->weight = $request['weight_1'];
            $productDetails->save();
        }
        if ($request['price_2']) {
            $productDetails = new ProductDetail();
            $productDetails->product_id = $product->id;
            $productDetails->price = $request['price_2'];
            $productDetails->weight = $request['weight_2'];
            $productDetails->save();
        }

        return redirect()->route('admin-products.index')->with('flash_message_success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $images = $product->productImages()->get();
        foreach ($images as $image) {
            if (file_exists(public_path() . $image->image_url)) {
                unlink(public_path() . $image->image_url);
            }
        }
        $product->productImages()->delete();
        $product->productDetails()->delete();
        $product->delete();

        return redirect()->route('admin-products.index')
            ->with('flash_message_success', 'Product deleted successfully');
    }
}
