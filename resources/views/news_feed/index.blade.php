@extends('layouts.app')

@section('title', 'News Feed')

@section('content')

<style>
    body {
        background-color: #57A4DC;
    }
</style>
    <div class="container">
        <!-- row -->
        <div class="row">
         <!-- col-md-6 col-md-offset-3 -->
         <div class="col-md-6 col-md-offset-3">
                  

        <!-- Current Tasks -->
        @if (count($activities) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    News Feed
                </div>

                <div class="panel-body">
                {{-- <table class="table table-striped task-table">
                        <thead>
                            Time
                            Member
                            News
                            Attachment
                        </thead>
                        <tbody> --}}                                
                            
                            @foreach ($activities as $activity)
                            <!-- panel -->
                            <div class="panel panel-primary">
                               
                               <!-- panel-body -->
                                <div class="panel-body">                           

                                    <!-- well -->
                                   <div class="well"> 

                                    <div>Posted - {{ date('F j, Y, g:i a', strtotime($activity['time'])) }}</div>
                                    <div>By - {{ $activity['display_name'] }}</div>
                                   
                                    <div><h4 class="text-center">- News -</h4> {{ $activity['name'] }}</div><br>        
                                        <div> 
                                            @if(!empty($activity['photo']))                                                  
                                                <center><a href="{{ route('dashboards.photo') }}"><img src="../images/{{ $activity['photo'] }}" class="img-thumbnail" alt="photo or image added to news feed" width="400px" height="auto"></a></center>
                                            @endif

                                            {{-- @if(!empty($activity['video']))

                                                <center><a href="{{ route('dashboards.photo') }}"><video width="400px" height="auto" class="img-thumbnail" controls>
                                                    <source src="../images/{{ $activity['video'] }}" type="video/mp4"> 
                                                </video></a></center>                                                             
                                            @endif --}}                      
                                        </div>
                                    </div>
                    <!-- /well -->
                    {{--  </tbody>
                    </table> --}}
                        </div><!-- /panel-body -->
                    </div><!-- /panel -->
                
                            @endforeach
                </div>
            </div>
        @endif
         </div>
        </div><!-- /row -->
    </div>
@stop