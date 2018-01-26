@extends('layouts.app')

@section('title', 'Show Image')

@section('content')
<!-- container -->
<div class="container">
	<!-- col-md-8 col-md-offset-2 -->
	<div class="col-md-8 col-md-offset-2">
		<h3>Show Page</h3>
			@if(!empty($picture->picture))

			<img src="{{ asset('/images/' . $picture->picture) }}" alt="" width="200" height="auto">

			@endif
	</div><!-- /col-md-8 col-md-offset-2 -->

</div><!-- /container -->
@stop