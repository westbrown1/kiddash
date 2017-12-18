@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>

.row{
    overflow: hidden; 
}

[class*="col-"]{
    margin-bottom: -99999px;
    padding-bottom: 99999px;
}

</style>
<!-- container -->
<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">{{ $user->name }}'s Dashboard</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<table class="table">
					<tbody> 				
				 		@foreach($joins as $join)
					 		@if($user->id == $join->user_id)
					 			 <tr> 
					 			 @if(!empty($join->team))		 		
					 				<td class="text-center"><a href="{{ route('joins.index') }}" name="team"><h4>{{ $join->team }}</h4></a></td>
					 				<td><a href="{{ route('joins.destroy', $join->id) }}" class="btn btn-danger btn-xs" style="margin-top: 9px;">Delete Team</a></td>
					 			 @endif
						 				{{-- <td><a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
						 				<td><a href="{{ route('teams.destroy', $team->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td> --}}
									</td>
						 		 </tr> 
					 		@endif
				 		@endforeach			 				 	
				 	 </tbody> 
			 	</table>
			</div>
		</div>

	<!-- row -->
	<div class="row">
		<div class="col-md-4">
			<a href="{{ route('dashboards.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Create Link</a>
			<a href="{{ route('dashboards.links') }}" class="btn btn-warning" style="margin-bottom: 15px;">Edit Links</a>
		</div>
	</div><!-- /row -->

	<!-- row -->
	<div class="row">
		 <div class="col-md-4">
			<table class="table">
				<tbody> 				
			 		@foreach($dashboards as $dashboard)
				 		@if($user->id == $dashboard->user_id)
				 			 <tr> 		 		
				 				<td><h4><a href="{{ $dashboard->url }}" target="_blank">{{ $dashboard->name }}</a></h4></td>
					 				{{-- <td><a href="{{ route('dashboards.edit', $dashboard->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
					 				<td><a href="{{ route('dashboards.destroy', $dashboard->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td> --}}
							</td>
					 		 </tr> 
				 		@endif
			 		@endforeach
			 				 	
			 	 </tbody> 
		 	</table>	
		</div>

	<div class="col-md-7 col-md-offset-1">
		<!-- Current Tasks -->
        @if (count($activities) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">News Feed</div>
	                <div class="panel-body">
	                    <table class="table table-striped task-table">
	                        <thead>
	                            <th>Time</th>
	                            <th>Member</th>
	                            <th>News</th>
	                        </thead>
	                        <tbody>
	                            @foreach ($activities as $activity)
	                                <tr>
	                                    <td class="table-text">
	                                        <div>{{ date('F j, Y, g:i a', strtotime($activity['time'])) }}</div>
	                                    </td>
	                                    <td class="table-text"><div>{{ $activity['display_name'] }}</div></td>
	                                    <td class="table-text"><div>{{ $activity['name'] }}</div></td>
	                                    @if(!empty($activity['photo']))
	                                    <td class="table-text">
	                                    	<div>
	                                    		<a href="{{ route('dashboards.photo') }}"><img src="../images/{{ $activity['photo'] }}" alt="" width="70px" height="auto"></a>
	                                    	</div>
	                                    </td>
										@endif
										@if(!empty($activity['video']))
                                        <td class="table-text">
                                            <div>	                                         
		                                        <a href="{{ route('dashboards.photo') }}"><video width="70px" height="auto" controls>
		                                            <source src="../images/{{ $activity['video'] }}" type="video/mp4">
		                                        </video></a> 	                                          
                                            </div>
                                        </td>
                                    	@endif
	                                </tr>
	                            @endforeach
	                        </tbody>
	                    </table>
	                </div>
            	</div>		
            </div>
        @endif
	</div><!-- /row -->

	<div class="row">
		<div class='col-md-12'>
			<a href="{{ route('photos.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Upload Image</a>
			<a href="{{ route('videos.create') }}" class="btn btn-warning" style="margin-bottom: 15px;">Upload Video</a> 
		</div>
	</div>

	<!-- row -->
	<div class="row">
		 <!-- col-md-12 -->
		 <div class="col-md-12">
		 	<table class="table table-responsive">
				<tbody>
			 	<h3 class="text-center">Your Images</h3>

					@foreach($photos as $photo)
						@if($user->id == $photo->user_id)
						<tr>
				 			<td>
				 				@if(!empty($photo->name))
									<h4>{{ $photo->name }}</h4>
								@endif								

								@if(!empty($photo->image))
									<a href="{{ route('dashboards.dashphotos') }}"><img src="{{asset('/images/' . $photo->image)}}" id="myImg" width="300" height="200"/></a>
								@endif

								<br><br>
								<a href="{{ route('photos.destroy', $photo->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Photo</a>	
				 			</td>
				 		</tr>	
					 	@endif
					@endforeach

				</tbody>
			</table>		

 		</div><!-- /col-md-12 -->
	</div><!-- /row -->

	<div class="row">
		<div class="col-xs-12">
			<table class="table table-responsive">
				<tbody>

					<h3 class="text-center">Your Videos</h3>

					@foreach($videos as $video)
						@if($user->id == $video->user_id)
							<tr>
								<td>
								@if(!empty($video->name))
									<h4>{{ $video->name }}</h4>
								@endif
								@if(!empty($video->file))

									<video width="320" height="auto" style='margin-bottom: 10px;' controls>
										<source src="{{ asset('images/' . $video->file) }}" type="video/mp4">
									</video><br><br>
									<a href="{{ route('videos.destroy', $video->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Video</a>
								@endif
								</td>
							</tr>						
						@endif
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</div><!-- /container -->

@stop