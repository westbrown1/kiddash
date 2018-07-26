@extends('layouts.app')

@section('title', 'Create a Message')

@section('content')
<div class="container">
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <h3 class="text-center">Create a New Message</h3>
            <h5 class="text-center">* All Messages are Private *</h5>
            <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <!-- Subject Form Input -->
                    <div class="form-group">
                        <label class="control-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                               value="{{ old('subject') }}" required>
                    </div>

                    <!-- Message Form Input -->
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea name="message" class="form-control" required>{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Upload Photo</label>
                        <input type="file" name="featured_img">
                    </div>                   
 
                    {{-- <div class="form-group">
                        <label class="control-label">Upload Video</label>
                        <input type="file" name="featured_vid">
                    </div> --}} 



                  <h4 class="text-center">Members on Your Team</h4>

                   @if($users1->count() > 0)
                   @if(!is_null($users1))
                        <div class="checkbox">                            
                            @foreach($users1 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    
                                       @if($users2->count() > 0)
                                       @if(!is_null($users2))
                        <div class="checkbox">                            
                            @foreach($users2 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif

                                       @if($users3->count() > 0)
                                       @if(!is_null($users3))
                        <div class="checkbox">                            
                            @foreach($users3 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif

                                       @if($users4->count() > 0)
                                       @if(!is_null($users4))
                        <div class="checkbox">                            
                            @foreach($users4 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif

                                       @if($users5->count() > 0)
                                       @if(!is_null($users5))
                        <div class="checkbox">                            
                            @foreach($users5 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif

                                       @if($users6->count() > 0)
                                       @if(!is_null($users6))
                        <div class="checkbox">                            
                            @foreach($users6 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team2 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users7->count() > 0)
                                       @if(!is_null($users7))
                        <div class="checkbox">                            
                            @foreach($users7 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team2 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users8->count() > 0)
                                       @if(!is_null($users8))
                        <div class="checkbox">                            
                            @foreach($users8 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team2 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users9->count() > 0)
                                       @if(!is_null($users9))
                        <div class="checkbox">                            
                            @foreach($users9 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team2 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users10->count() > 0)
                                       @if(!is_null($users10))
                        <div class="checkbox">                            
                            @foreach($users10 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team2 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users11->count() > 0)
                                       @if(!is_null($users11))
                        <div class="checkbox">                            
                            @foreach($users11 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team3 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users12->count() > 0)
                                       @if(!is_null($users12))
                        <div class="checkbox">                            
                            @foreach($users12 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team3 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users13->count() > 0)
                                       @if(!is_null($users13))
                        <div class="checkbox">                            
                            @foreach($users13 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team3 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users14->count() > 0)
                                       @if(!is_null($users14))
                        <div class="checkbox">                            
                            @foreach($users14 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team3 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users15->count() > 0)
                                       @if(!is_null($users15))
                        <div class="checkbox">                            
                            @foreach($users15 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team3 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users16->count() > 0)
                                       @if(!is_null($users16))
                        <div class="checkbox">                            
                            @foreach($users16 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team4 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users17->count() > 0)
                                       @if(!is_null($users17))
                        <div class="checkbox">                            
                            @foreach($users17 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team4 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users18->count() > 0)
                                       @if(!is_null($users18))
                        <div class="checkbox">                            
                            @foreach($users18 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team4 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users19->count() > 0)
                                       @if(!is_null($users19))
                        <div class="checkbox">                            
                            @foreach($users19 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team4 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users20->count() > 0)
                                       @if(!is_null($users20))
                        <div class="checkbox">                            
                            @foreach($users20 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team4 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users21->count() > 0)
                                       @if(!is_null($users21))
                        <div class="checkbox">                            
                            @foreach($users21 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team5 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users22->count() > 0)
                                       @if(!is_null($users22))
                        <div class="checkbox">                            
                            @foreach($users22 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team5 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users23->count() > 0)
                                       @if(!is_null($users23))
                        <div class="checkbox">                            
                            @foreach($users23 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team5 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
                    

                                       @if($users24->count() > 0)
                                       @if(!is_null($users24))
                        <div class="checkbox">                            
                            @foreach($users24 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team5 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif


                                                           @if($users25->count() > 0)
                                       @if(!is_null($users25))
                        <div class="checkbox">                            
                            @foreach($users25 as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!} - ({!! $user->team5 !!}) &nbsp; &nbsp; &nbsp;</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
            
                    <!-- Submit Form Input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">Send</button>
                    </div>

                    <h4 class="text-center">All Swimdash Members</h4>
                            @if($users->count() > 0)
                            @if(!is_null($users))
                        <div class="checkbox" style="margin-bottom: 60px;">                            
                            @foreach($users as $user)
                                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                value="{{ $user->id }}">{!!$user->name!!}</label>
                            @endforeach
                        </div>
                    @endif
                    @endif
            </form>
        </div>
    </div>
</div>
    
@stop