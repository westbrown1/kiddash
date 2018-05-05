@extends('layouts.app')

@section('title', 'Your Calendar')

@section('content')
<style>
    iframe {
    display: block;
    margin-left: 15%;
    margin-right: 15%;
}
</style>

<div class="container">
{{-- <a href="{{ route('dashboards.index') }}" class="btn btn-primary" style="margin-top: 15px;">Back</a> --}}

    <div class="row">
        <div class="col-md-12">
            <iframe src="https://calendar.google.com/calendar/embed?title=swim-dash%20calendar&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</div>
@stop