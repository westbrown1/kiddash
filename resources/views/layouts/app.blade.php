<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/1513883823.JPG') }}" class="img-thumbnail">
    <title>swim-dash | @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- @yield('stylesheets') --}}

    <style>
    #bottom {
        position: fixed;
        bottom: 0;
    }
    .bottom2 {
        margin-top: 50px;
    }
    </style> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        swim-dash
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('dashboards.index') }}">Dashboard</a></li>
                            <li><a href="{{ route('joins.country') }}">Join a Team</a></li>
                            <li><a href="{{ url('users') }}">Follow</a></li>
                            <li><a href="{{ url('tasks') }}">Add News</a></li>
                            <li><a href="{{ url('feed') }}">News Feed</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        
                                        <li><a href="/messages">Messages @include('messenger.unread-count')</a></li>
                                        <li><a href="/messages/create">Create New Message</a></li>
                                        <li><a href="{{ route('teams.create') }}">Create New Team</a></li>
                                        <li><a href="{{ route('pictures.create') }}">Add a Dashboard Photo/Image</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @include('partials._messages')
        @yield('content')
    </div>   

    <footer>
        <div class="col-md-2 col-md-offset-5 bottom2">
            <p class="text-center" id="bottom">
                Copyright &copy; - Swimdash {{ date('Y') }}
            </p>        
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- @yield('scripts') --}}

</body>

</html>