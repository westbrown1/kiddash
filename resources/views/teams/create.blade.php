@extends('layouts.app')

@section('title', 'Create a Team')

@section('content')
	

<!-- container -->
<div class="container">

	<a href="{{ url()->previous() }}" class="btn btn-success" style="margin-top: 15px;">Back</a>

	 <div class="row">	 
	 <h3 class="text-center">Create a New Team</h3>
	 	<div class="col-md-6 col-md-offset-3">
	 		{!! Form::open(['route' => ['teams.store', $user->id], 'method' => 'post']) !!}
				{{ Form::label('name', 'Team Name') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('city', 'City Name', ['style' => 'margin-top: 10px;']) }}
				{{ Form::text('city', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('state', 'State Name', ['style' => 'margin-top: 10px;']) }}
				{{ Form::text('state', null, ['class' => 'form-control', 'required' => '']) }}
				
				{{ Form::label('country', 'Country Name', ['style' => 'margin-top: 10px;']) }}
				{{ Form::text('country', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('sport', 'Sport/Interest Name', ['style' => 'margin-top: 10px;']) }}
				{{ Form::text('sport', null, ['class' => 'form-control', 'required' => '']) }}

				{{Form::submit('Create Team', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
				
	 		{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->

@stop