@extends('layouts.app')

@section('title', 'Follow')

@section('content')
<script src="https://use.fontawesome.com/242766c07a.js"></script>
<style>
    .size {
        font-size: 14px;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            </div>
        </div><br><br>

        <div class="col-sm-5">

        <div class="panel panel-default">
            <div class="panel-heading" style="padding-top: 3px; padding-bottom: 3px;">
                <h5>Members On Your Team (Not Following)</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <td><b>User</b></td>
                        <td><b>Team</b></td>
                        <td>&nbsp;</td>
                        <td>Photo Board</td>
                    
                    </thead>
                    <tbody> 

                         
                        @foreach($users1 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        
                        @if($user->id != Auth::user()->id)
                            
                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team }}</h4></td> 

                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>                
                            @if(!empty($user->username))
                            </form></td> <td><a href="{{ route('profile.board', $user->username) }}" class="btn btn-primary">{{ $user->name }}</a></td>
                            @endif
                            </tr>  
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                         
                        @foreach($users2 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)
                            <tr>
                            <td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team }}</h4></td>                                     
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users3 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team }}</h4></td>             
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users4 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users5 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users6 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team2 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">

                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users7 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team2 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
 
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users8 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team2 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users9 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team2 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users10 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team2 }}</h4></td> 

                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>     
                            </tr>                   
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users11 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)
                            <tr>
                            <td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team3 }}</h4></td>                                   
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                         
                        @foreach($users12 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team3 }}</h4></td>             
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users13 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team3 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users14 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team3 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users15 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team3 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users16 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team4 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users17 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team4 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form></td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users18 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team4 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users19 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team4 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                             
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users20 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team4 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> 
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users21 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team5 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                         
                        @foreach($users22 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team5 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users23 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team5 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> </td>
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users24 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                            @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team5 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> 
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        

                        @foreach($users25 as $user)
                        @foreach ($users['not_following'] as $sub)
                        @if($user->id == $sub->id)
                        @if($user->id != Auth::user()->id)

                            <tr><td><h4 class="size">{{ $user->name }}</h4></td>
                            <td><h4 class="size">{{ $user->team5 }}</h4></td>                                        
                                                                                                
                            <td><form action="{{url('follow') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="follow_id" value="{{ $user->id }}">
                               
                                <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i> Follow
                                </button>
                            </form> 
                            </tr>
                        @endif                                   
                        @endif   
                        @endforeach                   
                        @endforeach
                        
                        </tbody>
                    </td>
                </table>
            </div>
        </div>
        </div>

        <div class="col-sm-6 col-sm-offset-1">

            <!-- Following -->
            @if (count($users['following']) > 0)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Following
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <td>User</td>
                                <td>Teams</td>
                                <td>&nbsp;</td>
                                <td>Photo Board</td>
                            </thead>
                            <tbody>



                                @foreach ($users['following'] as $user)
                                    <tr>
                                    <td clphpass="table-text">{{ $user->name }}</td> 
                                    {{-- <td clphpass="table-text"><a href="{{ $user->email }}" target="_blank">{{ $user->email }}</a></td> --}}
                                   
                                    <td clphpass="table-text">{{ $user->team }} &nbsp; &nbsp; {{ $user->team2 }} &nbsp; &nbsp; {{ $user->team3 }} &nbsp; &nbsp; {{ $user->team4 }} &nbsp; &nbsp; {{ $user->team5 }}</td>

                                        <!-- Unfollow Button -->
                                        <td>
                                            <form action="{{url('follow/' . $user->follow_id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-follow-{{ $user->follow_id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i> Unfollow
                                                </button>
                                            </form>
                                        </td>@if(!empty($user->username))
                                <td><a href="{{ route('profile.board', $user->username) }}" class="btn btn-primary">{{ $user->name }}</a></td>
                                    </tr> 
                                @endif 
                                @endforeach                                                             
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>

        <div class="col-sm-offset-3 col-sm-6">

                    <!-- Following -->
                    @if (count($users['not_following']) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Swimdash Members (Not Following)
                            </div>

                            <div class="panel-body">
                                <table class="table table-striped task-table">
                                    <thead>
                                        <th>User</th>                                        
                                        <th>Teams</th>
                                        <th>&nbsp;</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                       

                                        @foreach ($users['not_following'] as $user)
                                             
                                            {{-- <td>  <a href="{{ route('profile.board', $user->username) }}">{{ $user->username }}</a>  </td> --}}
                                        
                                                <td clphpass="table-text"><div>{{ $user->name }}</div></td>
                                                <td clphpass="table-text">{{ $user->team }} &nbsp; &nbsp; {{ $user->team2 }} &nbsp; &nbsp; {{ $user->team3 }} &nbsp; &nbsp; {{ $user->team4 }} &nbsp; &nbsp; {{ $user->team5 }}</td>                                              
                                                <!-- User Follow Button -->
                                                <td>
                                                    <form action="{{ url('follow') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('POST') }}

                                                        <input type="hidden" name="follow_id" value="{{ $user->id }}">
                                                        <input type="hidden" name="check" value="Yes">

                                                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                                            <i class="fa fa-btn fa-user"></i> Follow
                                                        </button>
                                                    </form>
                                                </td>                                                                                                                      
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
    </div>
@endsection





