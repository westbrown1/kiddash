@extends('layouts.app')

@section('title', 'Create Link')

@section('content')
<style>
	
</style>
<!-- container -->
<div class="container">
	<a href="{{ route('dashboards.index') }}" class="btn btn-primary" style="margin-top: 15px;">Back</a>
	 <div class="row">	 
	 	<div class="col-md-6 col-md-offset-3">
	 		
	 		<h3 class="text-center">Create a Link</h3>
	 		{!! Form::open(['route' => ['dashboards.store', $user->id], 'method' => 'post', 'files' => true]) !!}

				{{ Form::label('name', 'Name of Link:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('url', 'Paste Url link:') }}
				{{ Form::text('url', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::submit('Create Link', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;']) }}
				
	 		{!! Form::close() !!}	 					
	 	</div>
	 </div>
</div><!-- /container -->

@stop