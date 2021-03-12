@extends('backend.layouts.app')
@section('title', 'Add Product')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Add Product</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Add Product</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Product</h3>
            </div>
            <div class="card-body">
                <div class="hero-form">
                    <form action="{{route('product.store')}}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-lebel">Product Name</label>
                            <input type="text" class="form-control" name="name" id="name" autocomplete="name" autofocus value="{{old('name')}}">
                            <div class="text-danger">
                                @error('name')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="image" class="col-form-lebel">Image</label>
                                <input type="file" class="form-control" name="image" id="image" autocomplete="image" autofocus>
                                <div class="text-danger">
                                    @error('image')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alt" class="col-form-lebel">Image Alt</label>
                                <input type="text" class="form-control" name="alt" id="alt" autocomplete="alt" autofocus value="{{old('alt')}}">
                                <div class="text-danger">
                                    @error('alt')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editor" class="col-form-lebel">Product Description</label>
                                <textarea name="description" id="editor" cols="30" rows="10">{{old('description')}}</textarea>
                                <div class="text-danger">
                                    @error('description')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        ClassicEditor.create( document.querySelector( '#editor' ), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
    </script>
@endsection('custom-script')