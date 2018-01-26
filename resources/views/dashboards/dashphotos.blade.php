@extends('layouts.app')

@section('title', 'Photo Page')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-display-container">

  @foreach($photos as $photo)
  @if($user->id == $photo->user_id)
  @if(!empty($photo->image))
      <center><img src="../images/{{ $photo->image }}" class="mySlides img-thumbnail"  alt="" width="700px" height="auto">
  @endif
  @endif
  @endforeach

  @foreach($videos as $video)
  @if($user->id == $video->user_id)
  @if(!empty($video->file))
      <video width="330" height="auto" style='margin-bottom: 10px;' class="mySlides img-thumbnail" controls>
        <source src="{{ asset('images/' . $video->file) }}" type="video/mp4">
      </video>
  @endif
  @endif
  @endforeach  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
@stop



