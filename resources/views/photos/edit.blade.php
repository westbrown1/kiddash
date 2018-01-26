@extends('layouts.app')

@section('title', 'Edit Photos')

@section('title', 'Edit Image')

@section('content')
<!-- container -->
<div class="container">
	 <h2 class="text-center">Edit Your Image</h2>
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">	
			{!! Form::model($dashboard, ['route' => ['photos.update', $photo->id], 'method' => 'PUT', 'files' => true]) !!}
				{{ Form::label('featured_img', 'Update Featured Image') }}
				{{ Form::file('featured_img') }}

				{{Form::submit('Edit Image', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;'])}}
			{!! Form::close() !!}

			@if(!empty($photo->image))
				<img src="{{asset('/images/' . $photo->image)}}" width="400" height="250" />
			@endif
	 	</div>
	 </div>
</div><!-- /container -->
@stop