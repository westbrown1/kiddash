@extends('layouts.app')

@section('title', 'Teams')

@section('content')

<div class="container">
<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">Teams to Join</h3>
	</div>
</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table">
			<thead>
				<th>Team Name</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th>Sport</th>
			</thead>
				<tbody> 				
			 		@foreach($teams as $team)
				 		{{-- @if($user->id == $team->user_id) --}}

				 			 <tr> 
				 			 @if(!empty($team->name))		 		
								<td><h4><a href="{{ route('joins.create') }}">{{ $team->name }}</a></h4></td>
				 			 @endif
					 				{{-- <td><a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
					 				<td><a href="{{ route('teams.destroy', $team->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td> --}}
					 			<td><h4>{{ $team->city }}</h4></td>
				 				<td><h4>{{ $team->state }}</h4></td>
				 				<td><h4>{{ $team->country }}</h4></td>
				 				<td><h4>{{ $team->sport }}</h4></td>							
					 		 </tr> 
				 		{{-- @endif --}}
			 		@endforeach
			 				 	
			 	 </tbody> 
		 	</table>
		</div>
	</div>
</div>

@stop