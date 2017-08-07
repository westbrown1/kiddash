@extends('layouts.app')

@section('title', '')

@section('content')

<!-- container -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">{{ $user->name }}'s Dashboard</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('dashboards.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Create Link</a
		</div>
	</div>	 			
		
	<div class="row">
		<div class="col-md-5">
			<table class="table">
				<tbody> 				
			 		@foreach($dashboards as $dashboard)
			 		@if($user->id == $dashboard->user_id)
			 			 <tr> 		 		
			 				<td><h4><a href="{{ $dashboard->url }}" target="_blank">{{ $dashboard->name }}</a></h4></td>
			 				<td><a href="{{ route('dashboards.edit', $dashboard->id) }}" class="btn btn-sm btn-warning">Edit Link</a></td>
			 				<td><a href="{{ route('dashboards.destroy', $dashboard->id) }}" class="btn btn-sm btn-danger">Delete Link</a></td>
				 		 </tr> 
			 		@endif
			 		@endforeach
			 		</div>		 	
			 	 </tbody> 
		 	</table>  
		</div>
		<div class="col-md-6 col-md-offset-1">
			<!-- Current Tasks -->
        @if (count($activities) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    News Feed
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Time</th>
                            <th>Vendor</th>
                            <th>Special</th>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ date('F j, Y, g:i a', strtotime($activity['time'])) }}</div>
                                    </td>
                                    <td class="table-text"><div>{{ $activity['display_name'] }}</div></td>
                                    <td class="table-text"><div>{{ $activity['name'] }}</div></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
		</div>

	</div>

	<div class="row">
		<div class='col-md-12'>
			<a href="{{ route('photos.create') }}" class="btn btn-primary" style="margin-bottom: 15px;">Upload Image</a>
		</div>
	</div>

	<!-- row -->
	<div class="row">
		 <!-- col-md-12 -->
		 <div class="col-md-12">
		 <table class="table">
		 	<tbody>
			@foreach($photos as $photo)
			@if($user->id == $photo->user_id)

		 			<td>
		 			@if(!empty($photo->name))
						<h4>{{ $photo->name }}</h4>
					@endif

					<a href="{{ route('photos.destroy', $photo->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Photo</a>

					@if(!empty($photo->image))
						<img src="{{asset('/images/' . $photo->image)}}" width="300" height="200" />
					@endif
		 			</td>

		 	@endif
			@endforeach
		 	</tbody>
		 </table>

		 </div><!-- /col-md-12 -->
	</div><!-- /row -->
</div><!-- /container -->

@stop