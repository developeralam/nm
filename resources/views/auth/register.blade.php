@extends('auth.layouts.app')
@section('title', 'Sign Up - Inside It')
@section('content')
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="login-form-head">
                    <h4>Sign up</h4>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" id="exampleInputName1" class="@error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="exampleInputEmail1" class="@error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" class="@error('password') is-invalid @enderror" name="password" value="{{old('password')}}" required autocomplete="password" autofocus>
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" id="exampleInputPassword2" class="@error('password-confirm') is-invalid @enderror" name="password-confirm" required autocomplete="password-confirm" autofocus>
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        <div class="login-other row mt-4">
                            <div class="col-6">
                                <a class="fb-login" href="#">Sign up with <i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-6">
                                <a class="google-login" href="#">Sign up with <i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Don't have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection
