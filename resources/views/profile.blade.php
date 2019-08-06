<style>
    #bottom {
        position: fixed;
        bottom: 0;
     }
    
    .bottom2 {
        margin-top: 100px;
    }
	
	.column {
		text-align: center;
	/*float: left;
	margin: 10px;*/
	}
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- container -->
<div class="container">      
<br><br>

<div class="row">
    <div class="col-md-12">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    </div>
</div><br>

<!-- row -->
<div class="row">
	<!-- col-md-12 -->
	<div class="col-md-12">
		 <h3 class="text-center">{{ $user->membername }}'s Image Board</h3>
	</div><!-- /col-md-12 -->
</div><!-- /row -->

<!-- row -->
<div class="row">
  <!-- col-md-12 column -->
  <div class="col-md-12 column">	
  	@foreach($photos as $photo)
		@if($user->id == $photo->user_id) 					
					{{-- @if(!empty($photo->name))
					<h4 width="350px">{{ $photo->name }}</h4>								
				@endif --}}							
				@if(!empty($photo->image))				
					<a href="{{ route('dashboards.dashphotos') }}"><img src="{{asset('/images/' . $photo->image)}}" class="img-thumbnail" height="auto" width="350px" alt="photos and images" /></a>
				@endif			 			
	 	@endif
	@endforeach
	</div><!-- /col-md-12 -->
</div><!-- /row -->

</div><!-- /container -->
    <footer>
        <div class="col-md-2 col-md-offset-5 bottom2">
            <p id="bottom">
                &copy; {{ date('Y') }} - swim-dash.com
            </p>        
        </div>
    </footer>
