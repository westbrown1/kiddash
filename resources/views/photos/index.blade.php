@extends('layouts.app')

@section('title', 'Create Image')

@section('content')

<!-- container -->
<div class="container">
	<!-- row -->
	<div class="row">
		 <!-- col-md-12 -->
		 <div class="col-md-12 column">
		 	 @foreach($photos as $photo)
						{{-- @if($user->id == $photo->user_id) --}} 					
				 				{{-- @if(!empty($photo->name))
									<h4 width="350px">{{ $photo->name }}</h4>								
								@endif --}}							
								@if(!empty($photo->image))
									<a href="{{ route('dashboards.dashphotos') }}"><img src="{{asset('/images/' . $photo->image)}}" class="img-thumbnail column" width="350px" height="auto" alt="photos and images" /></a>
								@endif			 			
					 	{{-- @endif --}}
			 @endforeach
		 </div><!-- /col-md-12 -->
	</div><!-- /row -->
</div><!-- /container -->
@stop