<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বর্তমানবিডি২৪</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    
  <meta property="fb:app_id" content="966242223397117" /> 
  <meta property="og:type"   content="article" /> 
  <meta property="og:url"    content="https://www.bortomanbd24.com.bd" /> 
  <meta property="og:title"  content="{{$fb_title}}" /> 
  <meta property="og:description"  content="{{ str_limit($fb_desc , $limit = 50, $end = '...')}}" /> 
  <meta property="og:image"  content="{{$fb_image}}" /> 
<!--    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css"> -->

      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    

    <link rel="stylesheet" href="{{ asset('css/ticker.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="{{asset('css/ticker-style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">



</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    
<!-- Header area -->
<div class="header_wrapper navbar-fixed-top">
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="{{route('homepage')}}">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="menu">
                
                    <ul>
                        <li><a href="{{route('homepage')}}">হোম</a></li>
                        @foreach($categories->sortBy('position') as $category)
                            <li><a href="{{ route('single_category', ['id'=>$category->id]) }}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>


                </div>
            </div>

        </div>
    
    
    </div>

    
</header>   
<!-- End Header -->
    <div class="clear-fix"></div>

<!-- Time Bar -->
<div class="time_bar">
    <div class="container">
        <div class="row">
        
            <div class="col-sm-4">
                <div class="date">
                    <p>ঢাকা | @include('layouts.bndate') </p>
                </div>

                

            </div>
            <div class="col-sm-3">
                <div class="fb-like" data-href="https://www.facebook.com/bortomanbd24/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
            </div>
            <div class="col-sm-2">
                <div class="social_menu">
                    <ul>
                        
                        <li><a href="https://www.facebook.com/bortomanbd24/" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/bortomanbd24" target="blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC3-ipQSYI7QWXii9iO8kx5Q/featured?view_as=subscriber" target="blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-print"></i></a></li>
                        
                    </ul>
                
                
                </div>
            </div>
            <div class="col-sm-3">
                    <div class="search">
                        <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search here">
                                <button class="btn btn-default" type="submit"></button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

</div>
</div>
<div class="clear_fix"></div>
