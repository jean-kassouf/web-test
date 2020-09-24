@extends('auth.layout')

@section('content')
<div class="card">
	<div class="card-body text-center">
		<div class="mb-4">
			<img class="brand" src="{{asset('theme')}}/img/bootstraper-logo.png" alt="bootstraper logo">
        </div>
		<h6 class="mb-4 text-muted">{{ __('Create a new account') }}</h6>
		
		<form method="POST" action="{{ route('register') }}">
            @csrf
			<div class="form-group">
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
			<div class="form-group">
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
			<div class="form-group">
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
			<div class="form-group">
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" >
            </div>
			<button class="btn btn-primary shadow-2 mb-4">{{ __('Register') }}</button>
        </form>
		<p class="mb-0 text-muted">All ready have an account? <a href="{{ route('login') }}">{{ __('Log in') }}</a></p>
    </div>
</div>
@endsection
