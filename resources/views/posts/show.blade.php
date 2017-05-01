@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">			
			<h2>{{$post->title}}</h2>
			<p>{{$post->descripcion}}</p>
			<p>{{$post->created_at->diffForHumans()}}</p>
		</div>
	</div>
	<hr>
@endsection
