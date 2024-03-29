@extends('layouts.app')

@section('title', 'Message')

@section('content')
<div class="container">
	<a href="/messages" class="btn btn-primary">Back</a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">			
				<h2>{{ $thread->subject }}</h2>
        		@each('messenger.partials.messages', $thread->messages, 'message')
        		@include('messenger.partials.form-message')
       
		</div>
	</div>
</div>

@stop