@extends('frontend.master')
@section('title','Login Form')
@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <div class="row pb-3">
                    <div class="col-md-12">
                        <h2>
                            <a href="{{route('login')}}" class="text-dark float-left">Login Form <span style="color:red;">&#8681;</span></a>
                            <a href="{{route('register')}}" class="text-muted float-right" title="Click to be Registered">Registration Form</a>
                        </h2>
                    </div>
                </div>
            </div>

            
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('frontend.master')

@section('title','Login Form')

@section('content')
<div class="userForm p-3">
	<h2>
        <a href="{{route('login')}}" class="actLog">Login Form <span style="color:red;">&#8681;</span></a>
        <a href="{{route('register')}}" class="disable_form" title="Click to be Registered">Registration Form</a>
    </h2>
	<form method="POST" action="{{ route('login') }}">
		@csrf
	  <div class="container">
		<label for="eml"><b>Email</b></label>
		<input type="text" placeholder="Enter email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter password" name="password" required>
			
		<button type="submit" href="{{}}">Login</button>
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
		<span class="psw text-dark">Forgot <a href="#" class="text-info">password?</a></span>
	  </div>
	</form>
</div>
@endsection
 --}}
