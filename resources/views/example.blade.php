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
<img src="{{ asset('/img/Screen Shot 2018-05-04 at 2.34.06 PM.png') }}" class="img-thumbnail" alt="example dashboard" style="width: 90%;">
</div>
@stop