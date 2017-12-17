<div class="media">
    <a class="pull-left" href="#">
        <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64&d=wavatar"
             alt="{{ $message->user->name }}" class="img-circle">
    </a>

    <div class="media-body">

        <h5 class="media-heading" style="font-size: 15px;">From: {{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        
        @if(!empty($message->photo))
            <img src="{{ asset('/images/' . $message->photo) }}" width="100%" height="auto"/>
        @endif

        @if(!empty($message->vid))
            <video width="100%" height="auto" style='margin-bottom: 10px;' controls>
                <source src="{{ asset('/images/' . $message->vid) }}" type="video/mp4">
            </video>             
        @endif 

        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>




