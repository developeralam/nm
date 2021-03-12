@extends('backend.layouts.app')
@section('title', 'Socal Links')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Socal Links</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Socal Links</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Social Links</h3>
            </div>
            <div class="card-body">
                <div class="site-config-form">
                    <form action="{{route('social.store')}}" method="post" class="w-75 m-auto">
                        @csrf
                        <input type="hidden" name="id" value="{{optional($social)->id}}">
                        <div class="form-group">
                            <label for="facebook" class="col-form-lebel">Facebook</label>
                            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook-name" autocomplete="company_name" autofocus value="{{old('facebook', $social->facebook??null)}}">
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
                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="twitter" autocomplete="twitter" autofocus value="{{old('twitter', $social->twitter??null)}}">
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
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" autocomplete="instagram" autofocus value="{{old('instagram', $social->instagram??null)}}">
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
                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" id="linkedin" autocomplete="linkedin" autofocus value="{{old('linkedin', $social->linkedin??null)}}">
                            <div class="text-danger">
                                @error('linkedin')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span><a href=""></a>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="youtube" class="col-form-lebel">Youtube</label>
                            <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" id="youtube" autocomplete="youtube" autofocus value="{{old('youtube', $social->youtube??null)}}">
                            <div class="text-danger">
                                @error('youtube')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span><a href=""></a>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="facebook_page" class="col-form-lebel">Facebook Page</label>
                            <textarea name="facebook_page" id="" cols="30" rows="10" class="form-control">{{old('facebook_page', $social->facebook_page)}}</textarea>
                            <div class="text-danger">
                                @error('facebook_page')
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