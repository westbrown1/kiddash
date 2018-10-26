<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta name="google-site-verification" content="AQxOvldFToqna4lAycyg8HvkP54cv03bC_0WBCskKkg" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>swim-dash.com | Create your team and connect | Best of 2018</title>

    <link rel="canonical" href="http://swim-dash.com/" />
    <meta name="description" content="What I want and haven't realized it yet. Swim-dash is a team or club based social website everyone may join. Where teammates, family and friends can communicate and share photos.  You create your own team.  It can be new or already existing.  After joining you will be taken to your private Dashboard page.  You'll have a News Feed, private messaging with email notification, photo uploading, link creation to your kids team website or any websites you like.  Access to follow your teammates.">


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
      <img src="{{ asset('img/photo-1503564996084-7acb58ec325c.jpeg') }}" alt="Work Group">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/photo-1508802307509-c4ac773a14d5.jpeg') }}" alt="little league baseball">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/Swim Team page - Dolphins_2011_0041.jpg') }}" alt="Swim Team">
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
	
<h2 style=text-align:center;
>swim-dash</h2> <h4 class="text-center">It's a great way to communicate among teammates, team families and friends on your very own created team.  And it's a lot of fun !</h4></center>
                    <p>Swim-dash is a free social website <b>everyone may join</b>. Originally it was designed to unite families, friends and kids who are on the same year round swim team. Of course, you don't have to be on a swim team to join this site.  You're welcome to join if you're not associated with any team at all.  Maybe you want to create a forum for an existing or new club, social group or sports team.  Or maybe you just want to keep up with your friends.  If so, just join, create your team, then ask others/friends to register on the site and then join your team.  You can join the site and join random teams (ex: The Carolina Panthers).<br><br><b>Anyone may register</b>. After registering (joining), you will be taken to your <b>private</b> Dashboard page.  This dashboard <b>makes a great homepage</b>.  There you can create links to your favorite team/group websites or any websites you frequently use for that matter (trust us, you can do a better job than Google on this one).  You may create a "team" by clicking the top right username dropdown menu.  The team can be your child's soccer team or just start a team with your friends.  The possibilites are almost endless.  Once the team is created, you are brought to the Join Page, just locate and join your newly created team.  The team you created and joined will appear on your Dashboard page as a link (You may join up to 5 teams).  If you click on that new dashboard link, you'll be taken to your private Follow page with others on the same team or teams.  If you want to follow news they post, just click their follow button. Their added news will be displayed on your dashboard news feed from then on.  You can unfollow anyone by clicking Follow from the top menu and then the unfollow button by their name. To see an example dashboard page, just click <a href="{{ url('/example') }}">here</a>. <br><br>Of course, you may publish your own news on the News Feed.  Just click Add News from the top menu.  But remember, it will be public.  Any members who follow you will be able to read your news.  You don't have to join a team to follow someone's news.  All site members are listed on the Follow page. <br><br>You may also send a private message and a photo/image attachment to other members by using the Send A Message Button on the top right side of your dashboard page.  Of course, you may receive private messages as well. You will be notified on the top right username dropdown menu and by email when a message arrives.  You can save images (on your computer) others have posted on the News Feed or private message page (just right click the image and save).  You may upload a dashboard image from your computer or smart phone by username dropdown menu also.  <br><br>Click your lower dashboard upload button to upload several photos from your computer or smart phone to your dashboard for viewing. So please register today and tell all your family and friends to join our site.  Then they can join you on your team!</p> </div>
</div>
@include('partials._footer')
</body>
</html>