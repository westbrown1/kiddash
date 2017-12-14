@extends('layouts.app')

@section('title', 'Edit Links')

@section('content')
<!-- container -->
<div class="container">
	 <h2 class="text-center">Edit Your Link</h2>
	 <div class="row">
	 	<div class="col-md-6 col-md-offset-3">		
			{!! Form::model($dashboard, ['route' => ['dashboards.update', $dashboard->id], 'method' => 'PUT', 'files' => true]) !!}
				{{Form::label('name', 'Name of Link:')}}
				{{Form::text('name', null, ['class' => 'form-control', 'required' => ''])}}

				{{Form::label('url', 'Url Link:')}}
				{{Form::text('url', null, ['class' => 'form-control', 'required' => ''])}}

				{{Form::submit('Edit Link', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;'])}}
				<a href="{{ route('dashboards.index') }}" class="btn btn-success" style="margin-top: 15px;">Back</a>
			{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->
@stop