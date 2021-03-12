@extends('backend.layouts.app')
@section('title', 'Add Client')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Add Client</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Add Client</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Client</h3>
            </div>
            <div class="card-body">
                <div class="hero-form">
                    <form action="{{route('client.store')}}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="image" class="col-form-lebel">Client Image</label>
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
                                <label for="link" class="col-form-lebel">Client Url</label>
                                <input type="text" class="form-control" name="link" id="link" autocomplete="link" autofocus value="{{old('link')}}">
                                <div class="text-danger">
                                    @error('link')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Add Client</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection