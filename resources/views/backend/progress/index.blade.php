@extends('backend.layouts.app')
@section('title', 'Progress Setting')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Progress Setting</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Progress Setting</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Progress Settings</h3>
            </div>
            <div class="card-body">
                <div class="site-config-form">
                    <form action="{{ route('progress.store') }}" method="post" class="w-75 m-auto">
                        @csrf
                        <input type="hidden" name="id" value="{{optional($progress)->id}}">
                        <div class="form-group">
                            <label for="experience" class="col-form-lebel">Experience Number</label>
                            <input type="number" class="form-control @error('experience') is-invalid @enderror" name="experience" id="experience" placeholder="Enter Experience Number" autocomplete="experience" autofocus value="{{old('experience', $progress->experience??null)}}">
                            <div class="text-danger">
                                @error('experience')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project" class="col-form-lebel">Compleated Project</label>
                            <input type="number" class="form-control @error('project') is-invalid @enderror" name="project" id="project" placeholder="Enter Compleated Project" autocomplete="project" autofocus value="{{old('project', $progress->project??null)}}">
                            <div class="text-danger">
                                @error('project')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="professionals" class="col-form-lebel">Professionals</label>
                            <input type="number" class="form-control" name="professionals" id="professionals" autocomplete="professionals"  placeholder="Enter Professionals Number"  autofocus value="{{old('professionals', $progress->professionals??null)}}">
                            <div class="text-danger">
                                @error('professionals')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customer" class="col-form-lebel">Customer</label>
                            <input type="number" class="form-control" name="customer" id="customer" placeholder="Enter Customer Number" autocomplete="customer" autofocus value="{{old('customer', $progress->customer??null)}}"> 
                            <div class="text-danger">
                                @error('customer')
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