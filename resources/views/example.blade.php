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
<div class="row">
	<col-md-12>
		<img src="{{ asset('/img/Screen Shot 2018-05-11 at 4.23.11 PM.png') }}" alt="example dashboard" style="width: 90%;" alt="example dashboard page">
	</col-md-12>
</div>

<hr>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3 class="text-center">Directions for Setting Up Dashboard Page</h3>
		<p>1) Add a dashboard image by clicking top right dropdown, identified by your username.
			<br>
			2) You can create a team by clicking top right dropdown, identified by your username. <br>
		3) You can join up to 5 teams by clicking the top menu. <br>
	4) You can add your favorite links by copy and pasting the link after clicking the create link button. <br>
5) You can follow other members on your team or anyone you choose.  Just click Follow from top menu. <br>
6) You can add your favorite photos by clicking the add image button.</p>
	</div>
</div>
</div>

@stop