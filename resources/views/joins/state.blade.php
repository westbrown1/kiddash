@extends('layouts.app')

@section('title', 'Find a Team')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="{{ route('joins.local') }}" method="get">
				{{ csrf_field() }}
			<label for="state" style="margin-top: 10px;">State (USA)</label>

	        <select class="form-control" name="teams">
				@foreach($teams as $team)
				@if(!empty($team->state))
	                <option value="{{$team->state}}">{{$team->state}}</option>
				@endif
				@endforeach
	        </select><br>
		        <button type="submit" class="btn btn-primary">Find Team</button>
			</form>
		</div>
	</div>
</div><!-- /container -->
@stop