@extends('layouts.app')

@section('title', 'Create a Video')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
						<h3 class="text-center">Upload a Video</h3>
			{!! Form::open(['route' => ['videos.store', $user->id], 'method' => 'post', 'files' => true]) !!}

				{{ Form::label('name', 'Name of Video:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}<br>

				{{ Form::file('file', ['required' => '']) }}

				{{ Form::submit('Upload Video', ['class' => 'btn btn-success', 'style' => 'margin-top: 15px;']) }}
	 		{!! Form::close() !!}
			<a href="{{ route('dashboards.index') }}" class="btn btn-success" style="margin-top: 15px;">Back</a>
		</div>
	</div>
</div>

@stop