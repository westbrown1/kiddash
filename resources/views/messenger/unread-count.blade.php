<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="label label-success">{{ $count }}</span>
@endif
