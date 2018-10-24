@extends('layouts.app')

@section('title', 'Photo Page')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-display-container">
   @if (count($activities) > 0) 
@foreach ($activities as $activity)

@if(!empty($activity['photo']))
      	<center><img src="../images/{{ $activity['photo'] }}" class="mySlides img-thumbnail"  alt="photos and images as slides" width="600px" height="auto"></center>
@endif

{{-- @if(!empty($activity['video']))
        <center><video width="700" height="auto" style='margin-bottom: 10px;' class="mySlides img-thumbnail" controls>
            <source src="../images/{{ $activity['video'] }}" type="video/mp4">
        </video></center>
@endif --}}  

  @endforeach
  @endif 
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
