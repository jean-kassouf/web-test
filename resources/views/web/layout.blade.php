<!doctype html>
<html lang="en">
	<head>
		@include('web.partials.head')
	</head>
	
	<body>
		
		@include('web.partials.nav')
		
		@yield('content')
		
		@include('web.partials.errors')
		
		@include('web.partials.scripts')
	</body>
</html>