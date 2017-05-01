@extends ('layouts.app')

@section('content')
	<form action="{{ route('update_post_path', ['post' => $post->id]) }}" method="POST">
	<!--Los exploradores solo pueden hacer get y post para lograr que el formulario se envie tenenmos que dejarlo como tipo post y utilizar un helper de laravel method_field -->
	{{ csrf_field() }}
	{{ method_field('PUT') }}
		<!-- Description Input-->
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control" value="{{ $post->title }}"/>
		</div>
		<!-- Description Input-->
		<div class="form-group">
			<label for="descripcion">Description:</label>
			<textarea name="descripcion" rows="5" class="form-control"/>{{ $post->descripcion }}</textarea>
		</div>
		<div class="form-group">
			<label for="url">Url:</label>
			<input type="text" name="url" class="form-control" value="{{ $post->url }}"/>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Edit Post</button>
		</div>
	</form>
@endsection