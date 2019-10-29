@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>

.row{
    overflow: hidden; 
}

[class*="col-"]{
    margin-bottom: -1px;
    padding-bottom: 1px;
}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

.glyphicon-none:before {
    content: "\2122";
    color: transparent !important;
}

.column {
	text-align: center;
	/*float: left;
	margin: 10px;*/
}

table {
            width:  100%;
            border-collapse: collapse;
        }
        .scrollingTable {
            /*width: 30em;*/
            overflow-y: auto;
        }
</style>

<!-- container -->
<div class="container">
		<div class="row">			
			<!-- col-md-3 col-md-offset-10 -->
			<div class="col-md-3 col-md-offset-10">
				 <a href="/messages/create" class="btn btn-primary" alt="send a message button">Send a Message <span class="glyphicon glyphicon-envelope"></span></a>
			</div><!-- /col-md-3 col-md-offset-10 -->
			<div class="col-md-4">
				<h2>{{ $user->name }}'s Dashboard</h2>
			</div>

			{{-- <div class="col-md-3 col-md-offset-5">
				<a href="{{ route('dashboards.calendar') }}" class="btn btn-primary">My Calendar<br>{{ date('F-d-Y') }}</a>
			</div> --}}
		</div>

	 	<div class="row">	 	 	 
	 	<!-- col-md-5 -->
		<div class="col-md-6">
			@foreach($pictures as $picture)
			    
				 	@if(Auth::user()->id == $picture->user_id)				 	
						<a href="{{ route('pictures.edit', $picture->id) }}"><img src="{{ asset('images/' . $picture->picture) }}" class="img-thumbnail" alt="image uploaded" width="200px" height="auto" style="margin: 40px 0 40px 15px;"></a>
					@endif
				
			@endforeach
		</div><!-- /col-md-5 -->

		<div class="col-md-5">
			<table class="table">
				<h3 class="text-center">Teams</h3>
				<tbody>						
			 		@foreach($joins as $join)
				 		@if($user->id == $join->user_id)
				 			 <tr> 
				 			 @if(!empty($join->team))
				 				<td class="text-center"><a href="{{ url('users') }}" name="team"><h4>{{ $join->team }}</h4></a></td>
								
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

	</div><!-- /row -->		

	<!-- row -->
	<div class="row">
		<div class="col-md-4">
			<a href="{{ route('dashboards.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Create Link</a>
			<a href="{{ route('dashboards.links') }}" class="btn btn-warning" style="margin-bottom: 15px;">Edit Links</a>
		</div>
	</div><!-- /row -->

	<!-- row -->
	<div class="row">
		 <div class="col-md-4 scrollingTable">
			<table class="table" style="margin-bottom: 40px" id="yourTable">
				<tbody> 

				{{-- <h4 style="margin-left:8px;">My Links</h4> --}}				
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

	<div class="col-md-7 col-md-offset-1 scrollingTable" style="margin-bottom: 30px;">		
		<!-- Current Tasks -->
        @if (count($activities) > 0)
            {{-- <div class="panel panel-primary" style="margin-bottom: 40px;">
                <div class="panel-heading"><h4 class="text-center">News Feed</h4></div>
	                <div class="panel-body"> --}}	                	     		 
	                	
	                    <table class="table table-striped task-table" id="myTable">
	                        <thead>
	                            <th>Time</th>
	                            <th>Member</th>
	                            <th>News</th>
	                            <th>Attachment</th>
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
		                                    		<a href="{{ route('dashboards.photo') }}"><img src="../images/{{ $activity['photo'] }}" class="img-thumbnail" alt="dashboard photos and images" width="120px" height="auto"></a>
		                                    	</div>
		                                    </td>
										@endif

										{{-- @if(!empty($activity['video']))
	                                        <td class="table-text">
	                                            <div>	                                         
			                                        <a href="{{ route('dashboards.photo') }}"><video width="120px" height="auto" class="img-thumbnail" controls>
			                                            <source src="../images/{{ $activity['video'] }}" type="video/mp4"> 
			                                        </video></a>
			                                    </div>                                            
	                                        </td>
                                    	@endif  --}}
	                                </tr>
	                            @endforeach
	                        </tbody>
	                    </table>

	                {{-- </div>
            	</div>	 --}}	
            </div>
        @endif
	</div><!-- /row -->
<hr>
	<div class="row">
		<div class='col-md-12'>			
			<center><a href="{{ route('photos.create') }}" class="btn btn-primary" style="margin-bottom: 20px;">Upload Image</a>
			{{-- <a href="{{ route('videos.create') }}" class="btn btn-warning" style="margin-bottom: 20px;">Upload Video</a> --}}
			<a href="{{ route('dashboards.uploads') }}" class="btn btn-danger" style="margin-bottom: 20px;">Delete Upload</a></center>
		</div>
	</div>

	<!-- row -->
	<div class="row">
		 <!-- col-md-5 -->
		 <div class="col-md-12">

					<h3 class="text-center">My Images (Viewable by Those Who are on Your Team)</h3>
		</div>
	</div>
<br>
	<!-- row -->
	<div class="row">
		 <!-- col-md-12 -->
		 <div class="col-md-12 column">
		 	 @foreach($photos as $photo)

						@if($user->id == $photo->user_id) 					
				 				{{-- @if(!empty($photo->name))
									<h4 width="350px">{{ $photo->name }}</h4>								
								@endif --}}							
								@if(!empty($photo->image))
									<a href="{{ route('dashboards.dashphotos') }}"><img src="{{asset('/images/' . $photo->image)}}" class="img-thumbnail" height="auto" width="350px" alt="photos and images" /></a>
								@endif			 			
					 	@endif
					@endforeach
		 </div><!-- /col-md-12 -->
	</div><!-- /row -->
					
		{{-- <div class="col-md-4 col-md-offset-2">
			 <table class="table table-responsive">
				<tbody>

					<h3 class="text-center">My Videos</h3>

					@foreach($videos as $video)
						@if($user->id == $video->user_id)
							<tr>
								<td>
								@if(!empty($video->name))
									<h4>{{ $video->name }}</h4>
								@endif

								@if(!empty($video->file))
									<a href="{{ route('dashboards.dashphotos') }}"><video width="330" height="auto" style='margin-bottom: 10px;' class="img-thumbnail" controls>
										<source src="{{ asset('images/' . $video->file) }}" type="video/mp4">
									</video> </a> {{--<br><br>
									<a href="{{ route('videos.destroy', $video->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Video</a> 
								@endif

								</td>
							</tr>						
						@endif
					@endforeach
				</tbody>
			</table> 
		</div> --}}
	</div>

<script type="text/javascript">
        function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 6;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
</script>
@stop