<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}

    <title>Kiddash</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            font-weight: 600;
            font-family: Raleway;
            color: #060606;
            /*height: 100vh;*/
            /*margin: 0;*/
        }

        /*.full-height {
            height: 100vh;
        }*/

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .my-font {
            font-family: garamond;
        }

    </style>
</head>
<body> 

    <h1 class="flex-center my-font">Kiddash</h1>

    @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/dashboards') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

    <div class="flex-center position-ref full-height">

        <div class="{{-- w3-content w3-section --}}" style="max-width:1000px">
          <img class="mySlides" src="{{ asset('img/Swim Team page - Dolphins_2011_0041.jpg') }}" style="width:1000px; height:600px;">
          <img class="mySlides" src="{{ asset('img/photo-1508802307509-c4ac773a14d5.jpeg') }}" style="width:1000px; height:600px;">
          <img class="mySlides" src="{{ asset('img/c700x420.jpg') }}" style="width:1000px; height:600px;">
        </div>
</div> 
       <!-- container -->
       <div class="container" style="margin:30px;"> 
            <div class="row">
                <div class="col-md-12">
                    <center><h3></p>
                </div>
            </div>
       </div><!-- /container -->       
</body>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000); // Change image every 9 seconds
}
</script>
</html>
