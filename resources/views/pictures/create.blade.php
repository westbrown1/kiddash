@extends('layouts.app')

@section('title', 'Create Image')

@section('content')

<!-- container -->
<div class="container">
	<a href="{{ route('dashboards.index') }}" class="btn btn-primary" style="margin-top: 15px;">Back</a>
	 <div class="row">

	 	<div class="col-md-6 col-md-offset-3">
	 	
	 <h3 class="text-center">Upload a Dashboard Image</h3>

	 		{!! Form::open(['route' => ['pictures.store', $user->id], 'method' => 'post', 'files' => true]) !!}

	 			{{-- {{ Form::label('name', 'Username') }} --}}
	 			{{-- {{ Form::text('name', $user->name, ['class' => 'form-control', 'type' => 'hidden']) }} --}}
	 			<input type="hidden" name="name" class="form-control" value="{{ $user->name }}">

				{{ Form::label('picture', 'Upload Dashboard Image', ['style' => 'margin-top: 20px;']) }}
				{{ Form::file('picture', ['required' => ''])}}
 
				{{Form::submit('Upload Image', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
				
	 		{!! Form::close() !!}
	 
	 	</div>
	 </div>
</div><!-- /container -->

@stop