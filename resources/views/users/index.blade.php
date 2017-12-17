@extends('layouts.app')

@section('title', 'Follow')

@section('content')
<script src="https://use.fontawesome.com/242766c07a.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="col-sm-offset-2 col-sm-8">

            <!-- Following -->
            @if (count($users['following']) > 0)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        Following
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>User</th>
                                <th>Member Url</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>

                                @foreach ($users['following'] as $user)
                                    <tr>
                                    <td clphpass="table-text">{{ $user->name }}</td> 
                                    <td clphpass="table-text"><a href="{{ $user->email }}" target="_blank">{{ $user->email }}</a></td>

                                        <!-- Unfollow Button -->
                                        <td>
                                            <form action="{{url('follow/' . $user->follow_id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-follow-{{ $user->follow_id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i> Unfollow
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
        <div class="col-sm-offset-2 col-sm-8">

                    <!-- Following -->
                    @if (count($users['not_following']) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Not Following
                            </div>

                            <div class="panel-body">
                                <table class="table table-striped task-table">
                                    <thead>
                                        <th>User</th>
                                        <th>&nbsp;</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users['not_following'] as $user)
                                            <tr>
                                                <td clphpass="table-text"><div>{{ $user->name }}</div></td>                                                
                                                <!-- User Follow Button -->
                                                <td>
                                                    <form action="{{ url('follow') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('POST') }}

                                                        <input type="hidden" name="follow_id" value="{{ $user->id }}">

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