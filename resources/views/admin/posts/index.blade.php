@extends('admin.layout')
@section('content')
<div class="col-md-12 col-lg-12">
	<div class="card">
		<div class="card-header">
			<a href="/Posts/create" class="btn btn-primary" >Add Post</a>
		</div>
		<div class="card-body">
			<p class="card-title"></p>
			<table class="table table-hover" id="dataTables-example" width="100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Page Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($pages as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->title }}</td>
						<td>
							<a href="{{ route('Posts.edit',$item->id ) }}" class="btn btn-warning">Edit </a>
							<a href="deletePost/{{ $item->id }}"  class="btn btn-danger">Delete </a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop