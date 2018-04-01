@extends('layouts.app')

@section('title', 'Find a Team')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	 <div class="row">
	 
	 	<div class="col-md-6 col-md-offset-3">

		  <h3 class="text-center">Find a Team</h3>
			<label for="country" style="margin-top: 10px;">Country</label>

				<select name="teams[]" class="form-control">

					@foreach ($teams as $team)
					@if(count($team->country) > 0)
					    <option value="{{$team->id}}">{{$team->country}}</option>
					@endif
					@endforeach
				</select>

			<label for="state" style="margin-top: 10px;">State (USA)</label>

				<select name="teams[]" class="form-control">
					@foreach ($teams as $team)
					    <option value="{{$team->id}}">{{$team->state}}</option>
					@endforeach
				</select>

	 	</div>
	 </div>
</div><!-- /container -->
@stop