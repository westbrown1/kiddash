@if (Session::has('sorry'))
	<!-- alert alert-danger -->
	<div class="alert alert-danger" role="alert">
		 <strong>Sorry,</strong> {{ Session::get('sorry') }} 
	</div><!-- /alert alert-danger -->
@endif