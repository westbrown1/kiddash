@extends('layouts.app')

@section('title', 'Join')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<table class="table">
			<td>@foreach($joins as $join)
				@if($user->id != $join->user_id)
				<h3>{{ $join->team }}</h3>
			 @endif @endforeach</td>
			<td>
				@foreach($users as $currents)
				@if(!empty($currents->team) && $currents->team = $user->team)
					<h3>{{ $currents->name }}</h3>
				@endif
				@endforeach
			</td>
		</table>
		</div>
	</div>
</div>

@stop