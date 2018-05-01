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

<div class=bgimg-1> <div class=caption> {{-- <span class=border>SCROLL DOWN</span> --}} </div> </div> <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;"> <h3 style=text-align:center;
>Parallax Demo</h3> <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis,
lectus nec libero turpis nunc at,
sed posuere mollis ullamcorper libero ante lectus,
blandit pellentesque a,
magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi,
morbi sociis. Condimentum dui ipsum consequat morbi,
curabitur aliquam pede,
nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor,
nunc nisl dapibus vestibulum at,
sodales tincidunt mauris ullamcorper,
dapibus pulvinar,
in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend,
aenean maecenas vulputate,
non id vehicula lorem mattis,
ratione interdum sociis ornare. Suscipit proin magna cras vel,
non sit platea sit,
maecenas ante augue etiam maecenas,
porta porttitor placerat leo.</p> </div> <div class="bgimg-2"></div> <div class=caption> <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span> </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p> </div> </div> <div class=bgimg-3> <div class=caption> {{-- <span class=border style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span> --}} </div> </div> <div style=position:relative;
> <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p> </div> </div> <div class=bgimg-1> <div class=caption> {{-- <span class=border>COOL!</span> --}} </div> </div>
</body>
</html>
