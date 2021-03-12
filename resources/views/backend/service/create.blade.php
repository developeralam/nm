@extends('backend.layouts.app')
@section('title', 'Add Service')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Service</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Add Service</span></li>
    </ul>
@endsection
@section('content')
    <div class="about-us">  
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Service</h3>
            </div>
            <div class="card-body">
                <div class="site-config-form">
                    <form action="{{ route('service.store')}}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-lebel">Service Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Service Name" autocomplete="name" autofocus value="{{old('name')}}" required>
                            <div class="text-danger">
                                @error('name')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-lebel">Service Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <div class="text-danger">
                                @error('image')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alt" class="col-form-lebel">Service Image Alt</label>
                            <input type="text" class="form-control" name="alt" id="alt" placeholder="Enter Service Image Alt" autocomplete="alt" autofocus value="{{old('alt')}}" required>
                            <div class="text-danger">
                                @error('alt')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-lebel">Description</label>
                            <textarea name="description" id="editor" cols="30" rows="10">{{old('description', $about->description??null)}}</textarea>
                            <div class="text-danger">
                                @error('description')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
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
@endsection