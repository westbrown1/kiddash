@extends('layouts.app')

@section('title', '')

@section('content')
<style>
	
</style>
<!-- container -->
<div class="container">
	 <div class="row">
	 <h3 class="text-center">Create a Link</h3>
	 	<div class="col-md-6 col-md-offset-3">
	 		{!! Form::open(['route' => ['dashboards.store', $user->id], 'method' => 'post', 'files' => true]) !!}
				{{ Form::label('name', 'Name of Link:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::label('url', 'Url link:') }}
				{{ Form::text('url', null, ['class' => 'form-control']) }}

				{{ Form::submit('Create Link', ['class' => 'btn btn-success', 'style' => 'margin-top: 15px;']) }}
				<a href="{{ route('dashboards.index') }}" class="btn btn-success" style="margin-top: 15px;">Back</a>
	 		{!! Form::close() !!}	 					
	 	</div>
	 </div>
</div><!-- /container -->

@stop