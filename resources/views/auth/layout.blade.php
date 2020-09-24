<!doctype html>
<html lang="en">
    <head>
        @include('auth.partials.head')
    </head>
    
    <body>
        <div class="wrapper">
            <div class="auth-content">
                @yield('content')
                @include('auth.partials.errors')
            </div>
        </div>
		@include('auth.partials.scripts')
    </body>
</html>