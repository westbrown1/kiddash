@extends('layouts.app')

@section('title', 'Teams')

@section('content')
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
<br>
	 		{!! Form::open(['route' => ['joins.store', $user->id], 'method' => 'post']) !!}
				
				{{-- {{ Form::label('name', 'Username') }}
				{{ Form::text('name', $user->name, ['class' => 'form-control']) }}<br> --}}
				<input type="hidden" name="name" class="form-control" value="{{ $user->name }}">

	 			{{ Form::label('name', 'Team Name') }}
                <select class="form-control" name="team">
					@foreach($teams as $team)
					@if(!empty($team->name))
		                <option value='{{ $team->name }}'>{{ $team->name }} | City = {{ $team->city }} {{ $team->state }} | Country = {{ $team->country }} | Sport = {{ $team->sport }}</option>
					@endif
					@endforeach
                </select>

				{{Form::submit('Join Team', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
				
	 		{!! Form::close() !!}

		</div>
	</div>
</div>
@stop