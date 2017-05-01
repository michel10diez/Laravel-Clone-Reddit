@extends ('layouts.app')

@section('content')
	<form action="{{ route('store_post_path') }}" method="POST">
	{{ csrf_field() }}
		<!-- Description Input-->
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control" value="{{ old('title') }}"/>
		</div>
		<!-- Description Input-->
		<div class="form-group">
			<label for="descripcion">Description:</label>
			<textarea name="descripcion" rows="5" class="<form-control"/>{{ old('descripcion') }}</textarea>
		</div>
		<div class="form-group">
			<label for="url">Url:</label>
			<input type="text" name="url" class="form-control" value="{{ old('url') }}"/>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create Post</button>
		</div>
	</form>
@endsection