@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Special
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Special</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Special
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
                        Current Specials
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Special</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

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
                            <th>Vendor</th>
                            <th>Special</th>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                   <td class="table-text"><div>{{ $activity['display_name'] }}</div></td>
                                    <td class="table-text"><div>{{ $activity['name'] }}</div></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (count($activities) < 1)
                    <p>Get started by <a href="/users">following users</a>!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection