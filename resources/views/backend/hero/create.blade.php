@extends('backend.layouts.app')
@section('title', 'Add Slider')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Add Slider</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Add Slider</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Slider</h3>
            </div>
            <div class="card-body">
                <div class="hero-form">
                    <form action="{{route('hero.store')}}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="image" class="col-form-lebel">Image</label>
                                <input type="file" class="form-control" name="img" id="image" autocomplete="img" autofocus>
                                <div class="text-danger">
                                    @error('img')
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
                                <label for="title" class="col-form-lebel">Image Title</label>
                                <input type="text" class="form-control" name="title" id="title" autocomplete="title" autofocus value="{{old('title')}}">
                                <div class="text-danger">
                                    @error('title')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="caption" class="col-form-lebel">Image Caption</label>
                                <input type="text" class="form-control" name="caption" id="caption" autocomplete="caption" autofocus value="{{old('caption')}}">
                                <div class="text-danger">
                                    @error('caption')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Add Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection