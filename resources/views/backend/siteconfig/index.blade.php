@extends('backend.layouts.app')
@section('title', 'Global Setting')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Global Setting</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><span>Global Setting</span></li>
    </ul>
@endsection
@section('content')
    <div class="site-config">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Global Settings</h3>
            </div>
            <div class="card-body">
                <div class="site-config-form">
                    <form action="{{ $siteconfig ? route('site-config.update', $siteconfig->id): route('site-config.create') }}" method="post" class="w-75 m-auto" enctype="multipart/form-data">
                        @csrf
                        @if(!empty($siteconfig))
                            @method('PUT')
                        @endif
                        <input type="hidden" name="id" value="{{optional($siteconfig)->id}}">
                        <div class="form-group">
                            <label for="company-name" class="col-form-lebel">Company Name</label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" id="company-name" placeholder="Enter Your Company Name" autocomplete="company_name" autofocus value="{{old('company_name', $siteconfig->company_name??null)}}" required>
                            <div class="text-danger">
                                @error('company_name')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-title" class="col-form-lebel">Company Title</label>
                            <input type="text" class="form-control @error('company_title') is-invalid @enderror" name="company_title" id="company-title" placeholder="Enter Your Company Title" autocomplete="company_title" autofocus value="{{old('company_title', $siteconfig->company_title??null)}}" required>
                            <div class="text-danger">
                                @error('company_title')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-logo" class="col-form-lebel">Company Logo</label>
                            <input type="file" class="form-control" name="logo" id="company-logo" autocomplete="logo" autofocus>
                            <div class="text-danger">
                                @error('logo')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-favicon" class="col-form-lebel">Company Favicon</label>
                            <input type="file" class="form-control  @error('favicon') is-invalid @enderror" name="favicon" id="company-favicon"   autocomplete="favicon" autofocus> 
                            <div class="text-danger">
                                @error('favicon')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-address" class="col-form-lebel">Company Addess</label>
                            <textarea name="address" id="company-address" cols="30" rows="6" class="form-control @error('address') is-invalid @enderror"  autocomplete="address" autofocus required>{{old('address', $siteconfig->address??null)}}</textarea>
                            <div class="text-danger">
                                @error('address')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-phone" class="col-form-lebel">Company Phone</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="company-phone" placeholder="Enter Your Company Phone Number" autocomplete="phone" autofocus value="{{old('phone', $siteconfig->phone??null)}}" required>
                            <div class="text-danger">
                                @error('phone')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company-email" class="col-form-lebel">Company Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="company-email" placeholder="Enter Your Company Email" autocomplete="email" autofocus value="{{old('email', $siteconfig->email??null)}}" required>
                            <div class="text-danger">
                                @error('email')
                                    <span>
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editor" class="col-form-lebel">Header Top Text</label>
                            <textarea name="httext" id="editor" cols="30" rows="10">{{old('httext', $siteconfig->httext??null)}}</textarea>
                            <small id="httext" class="form-text text-muted">Header Top Text Limit 75 Character</small>
                            <div class="text-danger">
                                @error('httext')
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