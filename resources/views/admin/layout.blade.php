<!doctype html>
<html lang="en">
<head>
	@include('admin.partials.head')
</head>

<body>
    <div class="wrapper">
		@include('admin.partials.nav')
		<div id="body" class="active">
		@include('admin.partials.head-nav')
		@yield('content')
		</div>
		@include('admin.partials.errors')
	</div>
		@include('admin.partials.scripts')
</body>
</html>