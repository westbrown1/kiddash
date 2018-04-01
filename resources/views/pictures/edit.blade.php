@extends('layouts.app')

@section('title', 'Edit Dashboard Image')

@section('content')
<!-- container -->
<div class="container"> 
<a href="{{ url()->previous() }}" class="btn btn-primary" style="margin-top: 15px;">Back</a>
<!-- row -->
<div class="row">	
	<!-- col-md-8 -->
	<div class="col-md-8 col-md-offset-2">
			
			 	 <h3 class="text-center">Change Your Dashboard Image</h3>

			 	 {{ Form::model($picture, ['route' => ['pictures.update', $picture->id], 'method' => 'PUT', 'files' => true])}} 			 

				 	{{ Form::label('name', 'Username') }}<br>
				 	{{ Form::text('name', null, ['class' => 'form-control']) }}<br>
   				
    				{{Form::label('picture', 'Update Dashboard Image')}}<br>
    				{{Form::file('picture')}}<br>

    				{{ Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block'])}}
    				
		{{ Form::close() }}
		
		<br><br>
		<a href="{{ route('pictures.destroy', $picture->id) }}" class="btn btn-danger btn-sm" style="margin-bottom: 10px;">Delete Image</a
	
	</div>
</div><!-- /row -->
</div><!-- /container -->
@stop

