@extends('auth.layout')

@section('content')
<div class="card">
	<div class="card-body text-center">
		<div class="mb-4">
			<img class="brand" src="{{asset('theme')}}/img/bootstraper-logo.png" alt="bootstraper logo">
        </div>
		<h6 class="mb-4 text-muted">{{ __('Sign in to your account') }}</h6>
		
		<form action="{{ route('login') }}" method="POST">
            @csrf
			<div class="form-group">
				<input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
			<div class="form-group">
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
			<div class="form-group text-left">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                </div>
            </div>
			<button class="btn btn-primary shadow-2 mb-4">{{ __('Login') }}</button>
        </form>
		<p class="mb-2 text-muted">Forgot password? 
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">{{ __('Reset') }}</a>
            @endif
        </p>
		<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">{{ __('Signup') }}</a></p>
    </div>
</div>
@endsection
