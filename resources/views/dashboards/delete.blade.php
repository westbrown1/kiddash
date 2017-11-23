@extends('layouts.app')

@section('title', 'Delete Links')

@section('content')
<!-- container -->
<div class="container">
	 <h2 class="text-center">Delete Your Link</h2>
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">		
			<table class="table">
				<tbody> 				
			 		@foreach($joins as $join)
				 		@if($user->id == $join->user_id)
				 			 {{-- <tr> --}} 
				 			 @if(!empty($join->team))		 		
				 				<td class="text-center"><a href="{{ route('joins.index') }}"><h4>{{ $join->team }}</h4></a></td>
				 				<td><a href="{{ route('joins.destroy', $join->id) }}" class="btn btn-danger btn-xs" style="margin-top: 9px;">Delete Team</a></td>
				 			 @endif
								</td>
					 		 {{-- </tr> --}} 
				 		@endif
			 		@endforeach
			 				 	
			 	 </tbody> 
		 	</table>
	 	</div>
	 </div>
</div><!-- /container -->
@stop