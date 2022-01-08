<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 10;
        $action = URL::route('brands.store');
        $brands = Brand::latest()->paginate($pagination);
        $brand = new Brand();
        return view('admin.brandsView', compact('brands', 'action', 'brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brand::create($request->all());
        return redirect()->route('brands.index')->with('flash_message_success', 'Brand added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $brands = Brand::latest()->paginate(10);
        $action = URL::route('brands.update', $brand->id);
        return view('admin.brandsView', compact('brand', 'action', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('flash_message_success', 'Brands updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('flash_message_success', 'Brands deleted successfully!');
    }
}
