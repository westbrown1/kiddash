@extends('layouts.app')

@section('title', 'Add News')

@section('content')
    <div class="container">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Some News - <b>Remember, All News is Public</b>   
                </div>
                
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">News</label>
                            
                            <div class="col-sm-6">
                                <textarea type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}"></textarea>                                
                            </div>
                        </div>

                        <!-- form-group -->
                        <div class="form-group">
                            <label for="photo" style="margin-left:20px;">Add Photo</label>
                             <input type="file" name="photo" style="margin-left:20px;">
                        </div><!-- /form-group --> 

                        <!-- form-group -->
                        <div class="form-group">
                            <label for="video" style="margin-left:20px;">Add Video</label>
                             <input type="file" name="video" style="margin-left:20px;">
                        </div><!-- /form-group -->                  

                           
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i>Add News
                                </button><br>   
                            </div>
                        </div>
                    </form>              
                </div>
            </div>
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current News
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>News</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        @if(!empty($task->photo))
                                        <td class="table-text">
                                            <div>
                                                <img src="{{ asset('/images/' . $task->photo) }}" class="img-thumbnail" width="100px" height="auto"/>
                                            </div>
                                        </td>
                                        @endif
                                        @if(!empty($task->video))
                                        <td class="table-text">
                                            <div>
                                        <video width="100px" height="auto" style='margin-bottom: 10px;' class="img-thumbnail" controls>
                                            <source src="{{ asset('/images/' . $task->video) }}" type="video/mp4">
                                        </video>  
                                            </div>
                                        </td>
                                        @endif
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
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
        <!-- Current Tasks -->
        <!-- News Feed Sidebar -->
        <div class="col-sm-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    News Feed Sidebar
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Member</th>
                            <th>News</th>
                            <th>Attachment</th>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                   <td class="table-text"><div>{{ $task->display_name }}</div></td>
                                    <td class="table-text"><div>{{ $task->name }}</div></td>
                                   @if(!empty($task->photo))
                                       <td class="table-text"><div><img src="{{ asset('/images/' . $task->photo) }}" class="img-thumbnail" width="100px" height="auto"/></div></td>                        
                                   @endif  
                                   @if(!empty($task->video))
                                        <td class="table-text">
                                            <div>
                                        <video width="100px" height="auto" style='margin-bottom: 10px;' class="img-thumbnail" controls>
                                            <source src="{{ asset('/images/' . $task->video) }}" type="video/mp4">
                                        </video>  
                                            </div>
                                        </td>
                                   @endif                                                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (count($tasks) < 1)
                    <p>Get started by <a href="/users">following users</a>!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection