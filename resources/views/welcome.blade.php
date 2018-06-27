<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta name="google-site-verification" content="AQxOvldFToqna4lAycyg8HvkP54cv03bC_0WBCskKkg" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>swim-dash.com | Create your team and connect | Best of 2018</title>

    <link rel="canonical" href="http://swim-dash.com/" />
    <meta name="description" content="Swim-dash is a team or club based social website everyone may join. Where teammates, family and friends can communicate and share photos.  You create your own team.  It can be new or already existing.  After joining you will be taken to your private Dashboard page.  You'll have a News Feed, private messaging with email notification, photo uploading, link creation to your kids team website or any websites you like.  Access to follow your teammates.">

    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}

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
    height: 100%;
    width: auto;
}

.bgimg-2 {
    background-image: url("{{ asset('img/photo-1508802307509-c4ac773a14d5.jpeg') }}");
    height: 100%;
    width: auto;
}

.bgimg-3 {
    background-image: url("{{ asset('img/photo-1503564996084-7acb58ec325c.jpeg') }}");
    height: 100%;
    width: auto;
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

<div class=bgimg-1> <div class=caption>  </div> </div> <div style="color: #777;background-color:white;text-align:center;padding:30px 80px;text-align: justify;"> <h2 style=text-align:center;
>swim-dash</h2> <h4 class="text-center">It's a great way to communicate among teammates, team families and friends on your very own created team.</h4></center>
                    <p>Swim-dash is a free social website <b>everyone may join</b>. Originally designed to unite families, friends and kids who are on the same sports team. Of course, you don't have to be on a sports team to join.  You're welcome to register if you're not on any team at all.  You may want to start an existing or new club, social group or any kind of team.  Or you can just join.<br><br><b>Anyone may register</b>. After registering you will be taken to your <b>private</b> Dashboard page.  This dashboard makes a great homepage.  There you can create links to your favorite team/group websites or any websites you frequently use for that matter (trust us, you can do a better job than Google on this one).  You may create a "team" by the top right username dropdown menu.  Once the team is created you are brought to the Join Page, just locate and join your team.  The team you created and joined will appear on your Dashboard page as a link (You may join up to 5 teams).  If you click on that new dashboard link, you'll be taken to your Follow page with others on the same team or teams.  If you want to follow news they post, just click their follow button. Their added news will be displayed on your dashboard news feed from then on.  You can unfollow anyone by clicking Follow from the top menu and then the unfollow button by their name. There is an example dashboard page link below. <br><br>Of course, you may publish your own news on the News Feed.  Just click Add News from the top menu.  But remember, it will be public.  Any members who follow you will be able to read your news.  You don't have to join a team to follow someone's news.  In addition, all site members are listed on the Follow page. <br><br>You may also send a private message and a photo/image attachment to other members by using the dashboard username dropdown menu on the top right.  Of course, you may receive private messages as well. You will be notified on the top right username dropdown menu and by email when a message arrives.  You can save images others have posted on the News Feed (just right click the image and save).  You may upload a dashboard image from your computer or smart phone by username dropdown menu also.  <br><br>Click the lower upload button to upload several photos from your computer or smart phone to your dashboard for viewing. So please register today and tell all your family and friends to join our site.  Then they can join you on your team!</p> </div> <div class="bgimg-2"></div> <div class=caption> <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span> </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>To see an example dashboard page, just click <a href="{{ url('/example') }}">here</a></p> </div> </div> <div class=bgimg-3> <div class=caption>  </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>If you would like to contact swim-dash.com, click <a href="mailto:swimdash18@gmail.com">here.</a></p> <p class="pull-right">Copyright &copy; {{ date('Y') }} - swim-dash.com</p> </div> </div> <div class=bgimg-1> <div class=caption>  
</div> 
</div>

</body>
</html>
