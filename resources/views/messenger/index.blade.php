@extends('layouts.app')

@section('title', 'Your Messages')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				@include('messenger.partials.flash')

	    		@each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
			</div>
		</div>
	    
	</div>
@stop