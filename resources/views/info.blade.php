@extends('layouts.app')

@section('title', 'Swim-dash Information')

@section('content')
<!-- container -->
<div class="container">
	<h2 class="text-center">swim-dash</h2>
	 <p>Originally it was designed to unite teammates, families and friends and on the same year round swim team. However, the possibilities are greater. You can easily create a forum (team) for an existing or new club, social group or sports team. Maybe you just want to keep up with your friends and want more privacy than Facebook. If so, just join, create your team, then ask others/friends to register on the site and join your team. You can also join the site and join random teams (ex: The Carolina Panthers or The Cape Fear Aquatics Club).
<br><br>
Anyone may register. After signing up, you will be taken to your private Dashboard page. This dashboard makes a great homepage. There you can create links to your favorite team/group websites or any websites you frequently use for that matter (trust us, you can do a better job than Google on this one). You may create a "team" by clicking the top right username dropdown menu. The team can be your child's soccer team, an existing professional or college team or just start a team with your friends (name it whatever you want). The possibilites are almost endless. Once the team is created, you are brought to the Join Page, just locate and join your newly created team. The team you created and joined will appear on your Dashboard page as a link (You may join up to 5 teams). If you click on that new dashboard link, you'll be taken to your private Follow page with others on the same team or teams. If you want to follow news they post, just click their follow button. Their added news will be displayed on your dashboard news feed from then on. You can unfollow anyone by clicking Follow from the top menu and then the unfollow button by their name. 
<br><br>
Of course, you may publish your own news on the News Feed. Just click Add News from the top menu. But remember, it will be public. Any members who follow you will be able to read your news. You don't have to join a team to follow someone's news. All site members are listed on the Follow page. 
<br><br>
You may also send a private message and a photo/image attachment to other members by using the Send A Message button on the top right side of your dashboard page. Of course, you may receive private messages as well. You will be notified on the top right username dropdown menu and by email when a message arrives. You can view a larger version of images on the News Feed by clicking on them. Save images (on your computer) others have posted on the News Feed or private message page (just right click the image and save). You may upload a dashboard image from your computer or smart phone by username dropdown menu also. 
<br><br>
Click your lower dashboard upload button to upload several photos from your computer or smart phone to your dashboard for viewing. So please register today and tell all your family and friends and teammates to join our site. Then they can join you on your team! <a href="{{ route('register') }}">Sign Me Up</a></p>
</div><!-- /container -->
@stop