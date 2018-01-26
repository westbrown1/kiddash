@extends('layouts.app')

@section('title', 'Links')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('dashboards.index') }}" class="btn btn-primary" style="margin-bottom: 10px;">Back</a>
				<h1>Edit Links</h1>
				<table class="table">
					 <tbody>					 
					 	@foreach($dashboards as $dashboard)
					 		@if($user->id == $dashboard->user_id)
					 			 <tr> 		 		
					 				<td><h4><a href="{{ $dashboard->url }}" target="_blank">{{ $dashboard->name }}</a></h4>
					 				</td>
						 				<td><a href="{{ route('dashboards.edit', $dashboard->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
						 				<td><a href="{{ route('dashboards.destroy', $dashboard->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td>
									</td>
						 		 </tr> 
					 		@endif
			 			@endforeach		
				 	 </tbody> 
		 		</table>  
			</div>
		</div>
	</div>
@stop