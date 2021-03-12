@extends('auth.layouts.app')
@section('title', 'Sign In - Inside It')
@section('content')
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--50">

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="login-form-head">
                    <h4>Sign In</h4>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1"class="@error('email') is-invalid @enderror" name="email" value="{{old('email')}}" autocomplete="email" autofocus>
                        <i class="ti-email"></i>
                        <div class="text-danger">
                            @error('email')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" class="@error('password') is-invalid @enderror" name="password" value="{{old('password')}}" autocomplete="password" autofocu>
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection