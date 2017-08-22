@extends('layouts.app')

@section('title', 'Message')

@section('content')
<div class="container">
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')

    </div>
</div>
@stop