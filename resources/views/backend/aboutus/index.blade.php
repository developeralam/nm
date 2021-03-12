@extends('backend.layouts.app')
@section('title', 'About Us')
@section('breadcrumbs')
    <h4 class="page-title pull-left">About Us</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>About Us</span></li>
    </ul>
@endsection
@section('content')
    <div class="about-us">  
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">About Us</h3>
            </div>
            <div class="card-body">
                <div class="site-config-form">
                    <form action="{{ $about ? route('aboutus.update', $about->id): route('aboutus.store') }}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        @if(!empty($about))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="title" class="col-form-lebel">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Your Title" autocomplete="title" autofocus value="{{old('title', $about->title??null)}}">
                            <div class="text-danger">
                                @error('title')
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
                        <div class="form-group">
                            <label for="video-link" class="col-form-lebel">Video LInk</label>
                            <textarea name="video_link" id="video_link" class="form-control" cols="30" rows="10">{{old('video_link', $about->video_link??null)}}</textarea>
                            <div class="text-danger">
                                @error('video-link')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video_thumbnail" class="col-form-lebel">Video Thumbnail</label>
                            <input type="file" name="video_thumbnail" id="video_thumbnail" class="form-control">
                            <div class="text-danger">
                                @error('video_thumbnail')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="banner1" class="col-form-lebel">Banner 1</label>
                            <input type="file" name="banner1" id="banner1" class="form-control">
                            <div class="text-danger">
                                @error('banner1')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="banner2" class="col-form-lebel">Banner 2</label>
                            <input type="file" name="banner2" id="banner2" class="form-control">
                            <div class="text-danger">
                                @error('banner2')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="banner3" class="col-form-lebel">Banner 3</label>
                            <input type="file" name="banner3" id="banner3" class="form-control">
                            <div class="text-danger">
                                @error('banner3')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="banner4" class="col-form-lebel">Banner 4</label>
                            <input type="file" name="banner4" id="banner4" class="form-control">
                            <div class="text-danger">
                                @error('banner4')
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