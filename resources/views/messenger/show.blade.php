@extends('layouts.app')

@section('title', 'Message')

@section('content')
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-success">Back</a><br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

		<h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
		</div>
	</div>
</div>



@stop