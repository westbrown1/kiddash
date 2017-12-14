@extends('layouts.app')

@section('title', 'Join')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

		<table class="table">
			<thead>
				<td>Member</td>
				<td>Team</td>
			</thead>
			<tbody>	

			@if(!empty($member->team))		
				@foreach($users as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					
					@endif
	     		@endforeach
	     	@endif	


	     	@if(!empty($member->team))		
				@foreach($users2 as $user)
					@if($user->id != Auth::user()->id)
						<tr>

						<td><h4>{{ $user->name }}</h4></td>
						<td><h4>{{ $user->team }}</h4></td>										
										                                                    
						<td><form action="{{url('follow') }}" method="POST">
	                        {{ csrf_field() }}
	                        {{ method_field('POST') }}

	                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

	                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
	                            <i class="fa fa-btn fa-user"></i>Follow
	                        </button>
	                    </form></td>

	                	</tr>
					@endif
	     		@endforeach
	     	@endif

	     @if(!empty($member->team))		
				@foreach($users3 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif	

	     		@if(!empty($member->team))		
				@foreach($users4 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team2 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif	


	     	@if(!empty($member->team))		
				@foreach($users5 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team2 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif


	     	@if(!empty($member->team))		
				@foreach($users6 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team2 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif

	     	@if(!empty($member->team))		
				@foreach($users7 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team3 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif	


	     	@if(!empty($member->team))		
				@foreach($users8 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team3 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif


	     	@if(!empty($member->team))		
				@foreach($users9 as $user)
					@if($user->id != Auth::user()->id)

					<tr><td><h4>{{ $user->name }}</h4></td>
					<td><h4>{{ $user->team3 }}</h4></td>										
									                                                    
					<td><form action="{{url('follow') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                            <i class="fa fa-btn fa-user"></i>Follow
                        </button>
                    </form></td></tr>
					@endif
	     		@endforeach
	     	@endif		
			</tbody>
			</td>
		</table>

		</div>
	</div>
</div>

@stop