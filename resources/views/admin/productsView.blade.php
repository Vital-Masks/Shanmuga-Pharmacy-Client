@extends('admin.shared.layout')

@section('content')


<!-- DATA TABLE-->
<section class="p-t-20 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="display: flex; align-items: center; justify-content: space-between">
                    <h3 class="title-5 m-b-35">Medicine Products</h3>
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success fade show" role="alert">
                        {!! session('flash_message_success') !!}
                        <button type="button" class="close pl-2" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <!-- <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                    </div>
                    <div class="table-data__tool-right">
                        <a href="{{ route('admin-products.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add item</a>

                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>brand</th>
                                <th>discount</th>
                                <th>description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr class="">

                                <td>{{$product->name}}</td>
                                <td>
                                    {{$product->brand->name}}
                                </td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('admin-products.show', $product->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Show">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin-products.edit', $product->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <form action="{{ route('admin-products.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center"> No Data !</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->

@endsection