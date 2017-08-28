@extends('layouts.app')

@section('title', 'Teams')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<table class="table">
				<tbody> 				
			 		@foreach($teams as $team)
				 		{{-- @if($user->id == $team->user_id) --}}
				 			 <tr> 
				 			 @if(!empty($team->name))		 		
				 				<td><h4><a href="{{ route('joins.create') }}">{{ $team->name }}</a></h4></td>
				 			 @endif
					 				{{-- <td><a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
					 				<td><a href="{{ route('teams.destroy', $team->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td> --}}
							</td>
					 		 </tr> 
				 		{{-- @endif --}}
			 		@endforeach
			 				 	
			 	 </tbody> 
		 	</table>
		</div>
	</div>
</div>

@stop