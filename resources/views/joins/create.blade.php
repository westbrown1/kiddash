
@extends('layouts.app')

@section('title', 'Join a Team')

@section('content')

<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	 <div class="row">
	 
	 	<div class="col-md-6 col-md-offset-3">
	 		
	 		<h3 class="text-center">Join The Team</h3>
	 		{!! Form::open(['route' => ['joins.store', $user->id], 'method' => 'post']) !!}
				
				{{ Form::label('name', 'Username') }}
				{{ Form::text('name', $user->name, ['class' => 'form-control']) }}<br>

	 			{{ Form::label('name', 'Team Name') }}
                <select class="form-control" name="team">
                    @foreach($teams as $team)
                        <option value='{{ $team->name }}'>{{ $team->name }} | City = {{ $team->city }}, {{ $team->state }} | Sport = {{ $team->sport }}</option>
                    @endforeach
                </select>

				{{Form::submit('Join Team', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
				
	 		{!! Form::close() !!}

	 	</div>
	 </div>
</div><!-- /container -->

@stop