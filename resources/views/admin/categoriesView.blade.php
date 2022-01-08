@extends('admin.shared.layout')
@section('content')
<section class="p-t-20 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="display: flex; align-items: center; justify-content: space-between">
                    <h3 class="title-5 m-b-35">Categories</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>name</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $cat)
                                    <tr class="">

                                        <td>{{$cat->name}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('categories.edit', $cat->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST">
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
                    <div class="col-lg-6">
                        @if(Session::has('flash_message_success'))
                        <div class="alert alert-success fade show" role="alert">
                            {!! session('flash_message_success') !!}
                            <button type="button" class="close pl-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
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
                                <strong>Add Category</strong>
                            </div>
                            <form method="POST" action="{{ $action }}" name="category-create" id="category-create" class="form-horizontal">
                                <div class="card-body card-block">
                                    @if($category->id)
                                    @method('PUT')
                                    @else
                                    @method('POST')
                                    @endif

                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class="form-control-label">Category Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="" value="{{ $category->name ?? old('name') }}" class="form-control">
                                        </div>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection