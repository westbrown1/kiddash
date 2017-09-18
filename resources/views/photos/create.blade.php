@extends('layouts.app')

@section('title', 'Create Image')

@section('content')

<!-- container -->
<div class="container">
	 <div class="row">
	 <h3 class="text-center">Upload an Image</h3>
	 	<div class="col-md-6 col-md-offset-3">
	 		{!! Form::open(['route' => ['photos.store', $user->id], 'method' => 'post', 'files' => true]) !!}
				{{ Form::label('name', 'Name for Image:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::label('featured_img', 'Upload Image', ['style' => 'margin-top: 20px;']) }}
				{{ Form::file('featured_img') }}

				{{Form::submit('Upload Image', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;'])}}
				<a href="{{ route('dashboards.index') }}" class="btn btn-success" style="margin-top: 15px;">Back</a>
	 		{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->

@stop