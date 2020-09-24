<script>
    @if ($errors->any())
	var data = [
        @foreach ($errors->all() as $error)
			{'type': 'danger', 'icon': 'fas fa-exclamation-triangle', 'title': 'Invalid Data:', 'message': '{{$error}}'},
        @endforeach
    ];
	notify(data);
    @endif
</script>