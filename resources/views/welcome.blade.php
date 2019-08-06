<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta name="google-site-verification" content="AQxOvldFToqna4lAycyg8HvkP54cv03bC_0WBCskKkg" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>swim-dash.com | Create your team and connect</title>

    <link rel="canonical" href="http://swim-dash.com/" />
    <meta name="description" content="Swim-dash is a unique and original social network website everyone may join. Teammates, family and friends can communicate team or club information.  The site allows messaging, photo sharing, a news feed and more.">
    <meta name="keywords" content="Social, Networking, Team, News Feed, Unique, New, Messaging, Photo Sharing, Private Dashboard, create, Fun, Organize">

</head>
<body>
@include('partials._nav')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('img/photo-1503564996084-7acb58ec325c.jpeg') }}" alt="Work Group" height="auto" width="100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/photo-1508802307509-c4ac773a14d5.jpeg') }}" alt="little league baseball" height="auto" width="100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/Swim Team page - Dolphins_2011_0041.jpg') }}" alt="Swim Team" height="auto" width="100%">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
	
<h2 class="text-center">swim-dash</h2> 

<h5 class="text-center" style="padding-bottom: 30px;">It's a great way to communicate among teammates, team families and friends on your very own created team. And it's a lot of fun ! Swim-dash is a free social website.  Anyone may <a href="{{ route('register') }}">sign up</a>. To see an example dashboard page, just  <a href="{{ url('example') }}">click here</a>. To learn more about swim-dash, <a href="{{ url('info') }}">click here</a>.</h5>

</div>
@include('partials._footer')
</body>
</html>