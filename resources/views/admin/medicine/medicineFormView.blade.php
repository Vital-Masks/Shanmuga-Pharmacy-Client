@extends('admin.shared.layout')
@section('content')

<div class="col-lg-6 mx-auto p-t-20 p-b-40">

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
            <strong>Add Medicine</strong>
        </div>
        <form method="POST" action="{{ $action }}" name="medicine-create" id="medicine-create" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body card-block">

                @if($medicine->id)
                @method('PUT')
                @else
                @method('POST')
                @endif

                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Generic Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="genericName" name="genericName" placeholder="" value="{{ $medicine->genericName ?? old('genericName') }}" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Brand</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="brand" name="brand" placeholder="" value="{{ $medicine->brand ?? old('brand') }}" class="form-control">

                    </div>

                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Net Weight/Dosage</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="dossageWeight" name="dossageWeight" placeholder="" value="{{ $medicine->dossageWeight ?? old('dossageWeight')  }}" class="form-control">

                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="category" name="category" placeholder="" value="{{ $medicine->category ?? old('category')  }}" class="form-control">

                    </div>

                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Disease</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disease" name="disease" placeholder="" value="{{ $medicine->disease ?? old('disease')  }}" class="form-control">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Age Category</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="ageCategory" name="ageCategory" placeholder="" value="{{ $medicine->ageCategory ?? old('ageCategory')  }}" class="form-control">

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control">
                        {{ $medicine->description ?? old('description') }}
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
@endsection