@extends('medicines.layout') 
@section('content')
<div class="wrapperdiv">
    <div class="formcontainer">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Medicine</h2>
                </div>
            </div>
        </div>
    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Oops! There were some problems with your input.</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <form action="{{ route('medicines.update', $medicine->ml_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Category</label>
                        <div class="col-sm-10">
                            <select name="ml_category" id="ml_category" class="form-control">
                                <option value="">Select Category</option>
                                @if($categories)
                                @foreach($categories as $cats)
                                    @if($cats == $medicine->ml_category)
                                        <option value="{{ $cats }}" selected >{{ $cats }}</option>
                                    @else
                                        <option value="{{ $cats }}">{{ $cats }}</option>
                                    @endif
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Medicine Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="ml_name" id="ml_name" value="{{ $medicine->ml_name }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Generic</label>
                        <div class="col-sm-10">
                            <input type="text" name="ml_generic" id="ml_generic" value="{{ $medicine->ml_generic }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Pharmaceutical</label>
                        <div class="col-sm-10">
                            <input type="text" name="ml_pharmaceutical" id="ml_pharmaceutical" value="{{ $medicine->ml_pharmaceutical }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control" >Description</label>
                        <div class="col-sm-10">
                            <textarea name="ml_desc" class="form-control">{{ $medicine->ml_desc }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-control">Medicine Photo</label>
                        <div class="col-sm-10">
                            <input type="file" name="ml_photo" id="ml_photo" class="form-control-file"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
