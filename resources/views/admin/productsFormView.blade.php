@extends('admin.shared.layout')
@section('content')

<div class="container row mx-auto">
    <div class="col-lg-6 p-t-20 p-b-40">

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <strong>Add Product</strong>
            </div>
            <form method="POST" action="{{ $action }}" name="product-create" id="product-create" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body card-block">

                    @if($product->id)
                    @method('PUT')
                    @else
                    @method('POST')
                    @endif

                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Product Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="name" name="name" placeholder="" value="{{ $product->name ?? old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Brand</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="">Please select</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}" {{ $product->brand_id == $brand->id ? "selected" : (old('brand_id') == $brand->id ? "selected" : "") }}>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Discount</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="discount" name="discount" placeholder="" value="{{ $product->discount ?? old('discount') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="0">Please select</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $product->category_id == $category->id ? "selected" : (old('category_id') == $category->id ? "selected" : "") }}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control">
                            {{ $product->description ?? old('description') }}
                            </textarea>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-multiple-input" class=" form-control-label">Upload</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="image_url" name="image_url[]" multiple="true" class="form-control-file">
                        </div>
                        <div style="display: flex;">
                            @foreach($product->productImages as $img)
                            <img style="width: 100px; height: 100px; object-fit: cover; margin-right: 5px" src="{{ asset($img->image_url) }}" alt="" class="img-fluid">
                            @endforeach
                        </div>
                    </div>

                    <hr />
                    <h5 class="pb-2">Price & Weight</h5>

                    @if($product->id)
                    @foreach($product->productDetails as $key=>$item)

                    <div class="row form-group">

                        <div class="col-12 col-md-6">
                            <input type="text" id="weight_one" name="weight_{{$key}}" placeholder="Net Weight/Dosage 01." value="{{$item->weight}}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="price_one" name="price_{{$key}}" placeholder="Price 01." value="{{$item->price}}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>
                    @endforeach

                    @else
                    <div class="row form-group">

                        <div class="col-12 col-md-6">
                            <input type="text" id="weight_one" name="weight_one" placeholder="Net Weight/Dosage 01." value="{{ old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="price_one" name="price_one" placeholder="Price 01." value="{{ old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-12 col-md-6">
                            <input type="text" id="weight_two" name="weight_two" placeholder="Net Weight/Dosage 02." value="{{ old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="price_two" name="price_two" placeholder="Price 02." value="{{ old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-12 col-md-6">
                            <input type="text" id="weight_three" name="weight_three" placeholder="Net Weight/Dosage 03." value="{{  old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="price_three" name="price_three" placeholder="Price 03." value="{{ old('name') }}" class="form-control">
                            <small class="form-text text-muted hide">This is a help text</small>
                        </div>
                    </div>
                    @endif

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="col-lg-6 p-t-20 p-b-40">

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </div>
</div>
@endsection