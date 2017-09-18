
@extends('layouts.app')

@section('title', 'Create a Team')

@section('content')

<!-- container -->
<div class="container">
	 <div class="row">
	 <h3 class="text-center">Join The Team</h3>
	 	<div class="col-md-6 col-md-offset-3">
	 		{!! Form::open(['route' => ['joins.store', $user->id], 'method' => 'post']) !!}

	 			{{ Form::label('name', 'Team Name:') }}
                <select class="form-control" name="team">
                    @foreach($teams as $team)
                        <option value='{{ $team->name }}'>{{ $team->name }} | City = {{ $team->city }}, {{ $team->state }} | Sport = {{ $team->sport }}</option>
                    @endforeach
                </select>

				{{Form::submit('Join Team', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;'])}}
				<a href="{{ route('teams.index') }}" class="btn btn-success" style="margin-top: 15px;">Back</a>
	 		{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->

@stop