@extends('layouts.app')

@section('title', 'Create a Team')

@section('content')

<!-- container -->
<div class="container">
	 <div class="row">
	 <h3 class="text-center">Create a New Team</h3>
	 	<div class="col-md-6 col-md-offset-3">
	 		{!! Form::open(['route' => ['teams.store', $user->id], 'method' => 'post']) !!}
				{{ Form::label('name', 'Name for Team:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('city', 'City Name', ['style' => 'margin-top: 20px;']) }}
				{{ Form::text('city', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('state', 'State Name', ['style' => 'margin-top: 20px;']) }}
				{{ Form::text('state', null, ['class' => 'form-control', 'required' => '']) }}
				
				{{ Form::label('country', 'Country Name', ['style' => 'margin-top: 20px;']) }}
				{{ Form::text('country', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('sport', 'Sport Name', ['style' => 'margin-top: 20px;']) }}
				{{ Form::text('sport', null, ['class' => 'form-control', 'required' => '']) }}

				{{Form::submit('Create Team', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
				<a href="{{ route('dashboards.index') }}" class="btn btn-success btn-block" style="margin-top: 15px;">Back</a>
	 		{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->

@stop