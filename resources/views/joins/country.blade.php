@extends('layouts.app')

@section('title', 'Find a Team')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<br>
	 <div class="row">
	 
	 	<div class="col-md-6 col-md-offset-3">

		  <h3 class="text-center">Find a Team</h3>					
	


		<form action="{{ route('joins.display') }}" method="get">


			<label for="country" style="margin-top: 10px;">Country</label>
	
				<select name="which" class="form-control">				
    				@foreach ($teams as $team)
    				@if(!empty($team->country))					
						<option value="{{$team->country}}">{{$team->country}}</option>
					@endif
					@endforeach									
				</select>			

			{{-- <label for="state" style="margin-top: 10px;">State (USA)</label>

				<select name="teams" class="form-control">
					
					@foreach ($states as $state)					
						@if(!empty($state->state))
						    <option value="{{$state->state}}">{{$state->state}}</option>
						@endif					
					@endforeach

				</select> --}} <br>
				<button type="submit" class="btn btn-primary">Find Team</button>
		</form>

	 	</div>
	 </div>
</div><!-- /container -->
@stop