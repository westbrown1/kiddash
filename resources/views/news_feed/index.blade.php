@extends('layouts.app')

@section('title', 'News Feed')

@section('content')
    <div class="container">
        <!-- Current Tasks -->
        @if (count($activities) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    News Feed
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Time</th>
                            <th>Member</th>
                            <th>News</th>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ date('F j, Y, g:i a', strtotime($activity['time'])) }}</div>
                                    </td>
                                    <td class="table-text"><div>{{ $activity['display_name'] }}</div></td>
                                    <td class="table-text"><div>{{ $activity['name'] }}</div></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@stop