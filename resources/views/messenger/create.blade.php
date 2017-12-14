@extends('layouts.app')

@section('title', 'Create a Message')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Create a New Message</h3>
            <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <!-- Subject Form Input -->
                    <div class="form-group">
                        <label class="control-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                               value="{{ old('subject') }}">
                    </div>

                    <!-- Message Form Input -->
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Upload Photo</label>
                        <input type="file" name="featured_img">
                    </div>                   
 
                    <div class="form-group">
                        <label class="control-label">Upload Video</label>
                        <input type="file" name="featured_vid">
                    </div> 



                   @if($users->count() > 0)
                        <div class="checkbox">                            
                            @foreach($users as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!}</label>
                            @endforeach
                        </div>
                    @endif
            
                    <!-- Submit Form Input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
    
@stop
