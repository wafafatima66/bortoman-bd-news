
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin BortomanBD</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{asset('css/widgEditor.css')}}" rel="stylesheet" type="text/css" />

    <script type="text/javascript" href="{{ asset('js/widgEditor.js') }}"></script>
    

      <link rel="stylesheet" href="{{ asset('css/ticker.css') }}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<script type="text/javascript" href="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" href="{{ asset('js/bootstrap.min.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        BortomanBD
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Create New User</a></li> 
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('showChangePasswordForm') }}" class="">Change your password</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">

                @if(Auth::check())

                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>

                            @if(Auth::user()->admin)
                                <li class="list-group-item">
                                    <a href="{{ route('user.index') }}">Users</a>
                                </li>
                            @endif
       

                            <li class="list-group-item">
                                <a href="{{ route('post.create') }}">Create new Post</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('posts') }}">All Posts</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('category.create') }}">Create new Category</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('categories') }}">Categories</a>
                            </li>
                            
                            @if(Auth::user()->admin)
                                <li class="list-group-item">
                                    <a href="{{ route('stylecategory.create') }}">Create new Style Category</a>
                                </li>
                            @endif
                            
                            @if(Auth::user()->admin)
                                <li class="list-group-item">
                                    <a href="{{ route('stylecategories') }}">Style Categories</a>
                                </li>
                            @endif

                            <li class="list-group-item">
                                <a href="{{ route('categories') }}">Tags</a>
                            </li>

                            
                            <li class="list-group-item">
                                <a href="{{ route('posts.trashed') }}">All Trashed Posts</a>
                            </li>
                            
                            <li class="list-group-item">
                                <a href="{{ route('vote.create') }}">Create New Poll</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('votes') }}">All Polls</a>
                            </li>


                        </ul>
                    </div>

                @endif

                <div class="col-lg-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
</body>
</html>
