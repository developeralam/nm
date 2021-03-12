@extends('backend.layouts.app')
@section('title', 'Add Member')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Add Member</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Add Member</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Member</h3>
            </div>
            <div class="card-body">
                <div class="hero-form">
                    <form action="{{route('team.store')}}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="image" class="col-form-lebel">Member Image</label>
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
                                <label for="name" class="col-form-lebel">Member Name</label>
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
                                <label for="title" class="col-form-lebel">Member Designation</label>
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
                                <label for="facebook" class="col-form-lebel">Facebook</label>
                                <input type="text" class="form-control" placeholder="facebook.com/developeralam" name="facebook" id="facebook" autocomplete="facebook" autofocus value="{{old('facebook')}}">
                                <div class="text-danger">
                                    @error('facebook')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twitter" class="col-form-lebel">Twitter</label>
                                <input type="text" class="form-control" placeholder="twitter.com/developeralam" name="twitter" id="twitter" autocomplete="twitter" autofocus value="{{old('twitter')}}">
                                <div class="text-danger">
                                    @error('twitter')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="instagram" class="col-form-lebel">Instagram</label>
                                <input type="text" class="form-control" placeholder="instagram.com/developeralam" name="instagram" id="instagram" autocomplete="instagram" autofocus value="{{old('instagram')}}">
                                <div class="text-danger">
                                    @error('instagram')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="linkedin" class="col-form-lebel">Linkedin</label>
                                <input type="text" class="form-control" placeholder="linkedin.com/developeralam" name="linkedin" id="linkedin" autocomplete="linkedin" autofocus value="{{old('linkedin')}}">
                                <div class="text-danger">
                                    @error('linkedin')
                                        <span>
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Add Member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection