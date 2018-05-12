@extends('layouts.app')

@section('title', 'Example Dashboard Page')

@section('content')
<style>
	img {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
}
</style>
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<br><br>
<img src="{{ asset('/img/Screen Shot 2018-05-11 at 4.23.11 PM.png') }}" class="img-thumbnail" alt="example dashboard" style="width: 90%;" alt="example dashboard page">
</div>
@stop