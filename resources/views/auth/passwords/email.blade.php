@extends('auth.layout')

@section('content')
<div class="card">
    <div class="card-body text-center">
        <div class="mb-4">
            <img class="brand" src="{{asset('theme')}}/img/bootstraper-logo.png" alt="bootstraper logo">
        </div>
        <h6 class="mb-4 text-muted">{{ __('Reset Password') }}</h6>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="btn btn-primary shadow-2 mb-4">{{ __('Reset') }}</button>
        </form>
        <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}">{{ __('Sign up') }}</a></p>
    </div>
@endsection
