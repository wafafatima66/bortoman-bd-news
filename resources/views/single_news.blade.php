@include('layouts.header')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- End Time Bar -->


<div class="container">
	<div class="single_wrapper"></div>

        
	<div class="row">
	<div class="col-sm-9">
		<div class="single_news">
			<h2>{{ $news->title }}</h2>
			
			<img class="featured" src="{{asset($news->featured)}}" alt="">
			<p>
				<?php
					echo $news->content;
				?>
			</p>
			
			@if(!empty ($news->featured_2))
				<img class="featured_2" src="{{asset($news->featured_2)}}" alt="">
			@endif
			
		</div>
	</div>

	<br><br><br>
	<div class="col-sm-3">
                <div class="important_sidebar">
                    <div class="tab tab1">
                        <div class="tabHeader">
                            <ul>
                              <li class="active">সর্বশেষ</li>
                              <li>সর্বাধিক পঠিত</li>
                            </ul>
                        </div>
                        <div class="tabContent">
                            <div class="tabItem active">
                              <ul class="list-group">

                                @foreach($posts->sortByDesc('id') as $post)

                                    <li class="list-group-item"><a href="{{ route('singlenews', ['id'=>$post->id])}}">{{ $post->title }}</a></li>
                                    @if($loop->iteration == 9)
                                        @break
                                    @endif
                                @endforeach
                                
                              </ul>
                            </div>
                            <div class="tabItem">
                              <ul class="list-group">
                                @foreach($posts->sortBy('id') as $post)

                                    <li class="list-group-item"><a href="{{ route('singlenews', ['id'=>$post->id])}}">{{ $post->title }}</a></li>
                                    @if($loop->iteration == 10)
                                        @break
                                    @endif
                                @endforeach
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
</div>



{{-- Social Share --}}
<div class="container">
	<div class="social_area">
		<div class="row">
			<div class="social">
				<p>সোশ্যাল মিডিয়া শেয়ারঃ </p>
				<ul>
					<li><div class="fb-share-button" data-href="http://bortoman.dev/news/44" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbortoman.dev%2Fnews%2F{{$news->id}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
					<li><a href="https://www.facebook.com/bortomanbd24/" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/bortomanbd24" target="blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC3-ipQSYI7QWXii9iO8kx5Q/featured?view_as=subscriber" target="blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href=""><i class="fa fa-print"></i></a></li>
					<li><div class="fb-save" data-uri="https://www.bortomanbd24.com" data-size="large"></div></li>
				</ul>
				
			</div>
		</div>
	</div>
</div>

<br><br>
<div class="more_news text-center">
	<a href="" class="btn btn-warning btn-lg">{{$this_category->name}} ক্যাটাগরির আরও খবর পড়ুন</a>
</div>

<div class="container">
	<div class="important_area">
		<div class="row">
			<div class="col-sm-12">
				<div class="important_content">
					<div class="row">
						@php ($i = 0)
						@foreach($posts->sortByDesc('id') as $post)
						<div class="col-sm-3">
							<div class="important_item">
								<a href="{{ route('singlenews', ['id'=>$post->id]) }}">
									<img src="{{$post->featured}}" alt="">
									<h4>{{$post->title}}</h4>
								</a>
								{{-- <p>এমন আতঙ্কে সাধারণ মানুষ জরুরি প্রয়োজন ছাড়া রাস্তাঘাটে বের হচ্ছে না।</p> --}}
							</div>
						</div>
						@php ($i = $i+1)
							@if($i == 4)
								</div>
								<div class="row">
								@php ($i = 0)
							@endif
						@endforeach
						
					</div>

					
					
					

				</div>
			</div>

		</div>
	</div>
</div>

<!-- End of Important Area -->


@include('layouts.footer')
