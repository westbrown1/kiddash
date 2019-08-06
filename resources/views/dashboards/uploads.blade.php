@extends('layouts.app')

@section('title', 'Uploads')

@section('content')

<div class="container">
	<!-- row -->
	<div class="row">
		 <!-- col-md-12 -->
		 <div class="col-md-12">			 	 
			<a href="{{ route('dashboards.index') }}" class="btn btn-primary">Back</a>
			<h1 class="text-center">Delete Uploads</h1>				
		 </div><!-- /col-md-12 -->
	</div><!-- /row -->

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="text-center">Your Photos</h3>
			<table class="table">
				<tbody>
				 					 
				@foreach($photos as $photo)
					@if($user->id == $photo->user_id)
						<tr>
			 			<td>				 					
			 				@if(!empty($photo->name))
								<h4>{{ $photo->name }}</h4>
							@endif								

							@if(!empty($photo->image))
								<img src="{{asset('/images/' . $photo->image)}}" class="img-thumbnail" width="630px" height="100%"  alt="photos and images uploaded" />
							@endif							

							<br><br>
							<a href="{{ route('photos.destroy', $photo->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Photo</a>
							
			 			</td>
			 			</tr>
				 	@endif
				 @endforeach

				</tbody>
			</table>
		</div>
		<!-- col-md-5 col-md-offset-1 -->
		{{-- <div class="col-md-5 col-md-offset-1">
			<h3 class="text-center">Your Videos</h3>
			<table class="table">
			 	<tbody>

	 			@foreach($videos as $video)
				@if($user->id == $video->user_id)
					 <tr>				
						<td>
						@if(!empty($video->name))
							<h4>{{ $video->name }}</h4>
						@endif

						@if(!empty($video->file))
							<video width="200" height="auto" style='margin-bottom: 10px;' class="img-thumbnail" controls>
								<source src="{{ asset('/images/' . $video->file) }}" type="video/mp4">
							</video>
							<br><br>
							<a href="{{ route('videos.destroy', $video->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Video</a> 
						@endif
						</td>
					 </tr>						
				@endif
				@endforeach	

		 	 	</tbody> 
 			</table> 
	 	</div> --}} <!-- /col-md-5 col-md-offset-1 --> 
	</div>
</div>
@stop