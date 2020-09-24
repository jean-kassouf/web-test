@extends('admin.layout')

@section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">Posts</div>
		<div class="card-body">
			<h5 class="card-title">Add New Post</h5>
			<form class="needs-validation" method="post" action="{{ route('Posts.store') }}" novalidate accept-charset="utf-8">
				{{csrf_field()}}
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="name">Title</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" placeholder="Title" required>
						<small class="form-text text-muted">Enter a valid title.</small>
						<div class="valid-feedback">Looks good!</div>
						<div class="invalid-feedback">Please enter a valid title.</div>
						@error('title')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message  }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="name">Type</label>
						<input type="text" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" name="type" placeholder="Type">
						<small class="form-text text-muted">Enter a valid type.</small>
						<div class="valid-feedback">Looks good!</div>
						<div class="invalid-feedback">Please enter a valid type.</div>
						@error('type')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message  }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12 col-lg-12">
						<label for="name">Content</label>
						<div class="box box-primary">
							<div class="box-body">
								<!--<div id="summernote" name="post_content">-->
									<textarea name="post_content" id="summernote" value="{{ old('post_content') }}"></textarea>
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="form-control-label">Image</label>
						<div class="custom-file ">
							<input type="file" name="post_img" class="custom-file-input">
							<label class="custom-file-label">Choose File</label>
						</div>
						<small class="text-muted">The image must have a maximum size of 1MB</small>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
				<a href="/Posts"  class="btn btn-danger"><i class="fas fa-times"></i> Cancel</a>
			</form>
		</div>
	</div>
</div>

@stop