<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}

    <title>swim-dash</title>
<style amp-custom> a {
    color: #fff;
}

body,
html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
    color: #777;
}

.bgimg-1,
.bgimg-2,
.bgimg-3 {
    position: relative;
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bgimg-1 {
    background-image: url("{{ asset('img/Swim Team page - Dolphins_2011_0041.jpg') }}");
    min-height: 100%;
}

.bgimg-2 {
    background-image: url("{{ asset('img/photo-1508802307509-c4ac773a14d5.jpeg') }}");
    min-height: 400px;
}

.bgimg-3 {
    background-image: url("{{ asset('img/photo-1503564996084-7acb58ec325c.jpeg') }}");
    min-height: 400px;
}

.caption {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    color: #000;
}

.caption span.border {
    color: black;
    font-size: 25px;
    letter-spacing: 10px;
}

h3 {
    letter-spacing: 5px;
    text-transform: uppercase;
    font: 20px "Lato", sans-serif;
    color: #111;
}

    a {
        color: black;
        margin-right: 20px;
    }
    
    a:hover {
        text-decoration: none;
    }
    
    #bs-example-navbar-collapse-1 {
        margin-top: 30px;
    }
    
    .navbar-toggle {
        border: 1px solid #337ab7;
    }
    
    .icon-bar {
        background-color: #337ab7;
    }
    
    .navbar-collapse.in {
        background-color: #b6b6b6;
    }
</style>
</head>
<body>

@include('partials._nav')

<div class=bgimg-1> <div class=caption> {{-- <span class=border>SCROLL DOWN</span> --}} </div> </div> <div style="color: #777;background-color:white;text-align:center;padding:30px 80px;text-align: justify;"> <h2 style=text-align:center;
>swim-dash</h2> <h4 class="text-center">It's a great way to communicate among teammates, team families and friends on your very own created team.</h4></center>
                    <p>Swim-dash is a social website <b>everyone may join</b>. Originally designed to unite families, friends and kids who are on the same sports team. Of course, you don't have to be on a sports team to join.  You're welcome to join if you're not on any team at all.  You may join if you want to start an existing or new club, social group or any type team.  Or you can just join.<br><br><b>Anyone may join</b>. After joining you will be taken to your <b>private</b> dashboard.  This dashboard makes a great homepage.  There you can create links to your favorite team/group websites or any websites you frequently use for that matter (trust us, you can do a better job than Google on this one).  You may create a "team".  Once the team is created, it will be included on the team to join list. Then just join the team you created and it will appear on your dashboard. You may join up to 5 teams.  If you click on the dashboard link of the joined team, you'll be taken to the follow page with others on the same team or teams.  If you want to follow news they post, just click the follow button. Their added news will be displayed on your dashboard news feed from then on.  You can unfollow anyone by clicking Follow from the top menu and then the unfollow button by their name.  <br><br>You may publish your own news on the News Feed.  Just click Add News from the top menu.  But remember, it will be public.  Other members on the same team or any members who follow you will be able to read all your news.  You don't have to join a team to follow someone's news.  There is a Follow link on the top menu where all members are listed. <br><br>You may also send a private message and image/video attachment to other members by using the dashboard dropdown menu on the top right.  Of course, you may receive private messages as well. You will be notified on the username dropdown menu and by email when a message arrives.  You can save photos and videos others have posted on the News Feed (just right click the image and save).  You may upload a dashboard image from your computer or smart phone by dropdown menu also.  Click the upload buttons to upload several photos and videos from your computer or smart phone to your dashboard for viewing. <br><br>Additionally, you have your own <b>private</b> calender page to set and check upcoming events and appointments.  So please register today and tell all your family and friends to join our site.  Then they can join you on your team!</p> </div> <div class="bgimg-2"></div> <div class=caption> <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span> </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>To see an example dashboard and calender page, just click <a href="{{ url('/example') }}">here</a></p> </div> </div> <div class=bgimg-3> <div class=caption> {{-- <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span> --}} </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>If you would like to contact swim-dash.com, click <a href="">here.</a></p> <p class="pull-right">Copyright &copy; - Swimdash {{ date('Y') }}</p> </div> </div> <div class=bgimg-1> <div class=caption> {{-- <span class=border>COOL!</span> --}} </div> </div>
</body>
</html>
