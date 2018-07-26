@extends('layouts.app')

@section('title', 'Messages')

@section('content')
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			@include('messenger.partials.flash')

    		@each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
		</div>
	</div>
</div>
 
@stop