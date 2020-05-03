@include('layouts.header')
<!-- End Time Bar -->


<!-- Feature Area -->
<div class="container">
    <div class="feature_area">
        <div class="header_wrapper"></div>
        <div class="top_ad">
            <img src="images/top_ad.png" alt="">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="feature_big">
                    
                        {{-- <img src="images/feature_big.jpg" alt="">
                        <h2>এখনও বের হননি খালেদা জিয়া, কারাগারে থাকা দুই আসামি আদালতে</h2> --}}

                        @foreach($posts_feature_big->sortByDesc('id') as $post )
                            @if($loop->iteration < 2)
                                <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                    <img class="img-responsive" src="{{ $post->featured }}" alt="">
                                    <h2>{{ $post->title }}</h2>
                                </a>
                             @endif
                        @endforeach
                        
                   
                </div>
            </div>

            <div class="col-sm-6">
                <div class="feature_small">

                    <div class="row">
                         @foreach($posts_feature_small->sortByDesc('id') as $post)
                            @if($loop->iteration < 5)
                                <div class="col-sm-6">
                                    <div class="feature_small_item">
                                        <a href="{{ route('singlenews', ['id'=>$post->id]) }}">    
                                            <img class="img-responsive" src="{{ $post->featured }}" alt="">
                                            <h4>{{ $post->title }}</h4>
                                        </a>    
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    

                </div>
            </div>  
        </div>
    </div>
</div>

<div class="clear_fix"></div>

<div class="container">
    <div class="ticker-container">
  <div class="ticker-caption">
    <p>সর্বশেষ সংবাদ</p>
  </div>
  <ul>
    @foreach($posts->sortByDesc('id') as $post)
        <div>
            <li><span>{{ $post->title }}&ndash; <a href="{{ route('singlenews', ['id'=>$post->id]) }}">পড়ুন</a></span></li>
        </div>
        @if($loop->iteration == 5)
            @break
        @endif
    @endforeach

  </ul>

</div>
</div>
<div class="clear_fix"></div>




<!-- Important Area -->
<div class="container">
    <div class="important_area">
        <div class="row">
            <div class="col-sm-9">
                <div class="important_content">
                    <div class="row">
                    @foreach($posts_bangladesh->sortByDesc('id') as $post)
                        @if($loop->iteration < 10)
                        <div class="col-sm-4">
                            <div class="important_item">
                                <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                    <img src="{{ $post->featured }}" alt="">
                                    <h4>{{ str_limit($post->title , $limit = 27, $end = '-')}}</h4>
                                    {{-- <p>{{ $post->title }}</p> --}}
                                </a>
                                <p class="details">{{ str_limit($post->content , $limit = 120, $end = '...')}}</p>
                            </div>
                        </div>
                            @if($loop->iteration == 3)
                                </div>
                                <div class="row">
                            @endif
                            @if($loop->iteration == 6)
                                </div>
                                <div class="row">
                            @endif
                        @endif
                        @endforeach
                        <div class="more_news text-center">
                            <a href="{{route('single_category', ['id'=>$post->category->id])}}" class="btn btn-default btn-lg">আরও খবর</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="block_news">
                                <div class="title">
                                    <h4>
                                        সম্পাদকীয় ও মন্তব্য
                                    </h4>
                                    @foreach($posts_pollitics as $post)
                                        <a href="{{route('single_category', ['id'=>$post->category->id])}}">আরও >></a>
                                        @break
                                    @endforeach
                                </div>
                            </div>
                            @foreach($posts_pollitics->sortByDesc('id') as $post)
                                @if($loop->iteration < 5)
                                    <div class="block_news_item">
                                        <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                            <img src="{{$post->featured}}" alt="">
                                            <p>{{$post->title}} {{$post->category->id}}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-sm-4">
                            <div class="block_news">
                                <div class="title">
                                    <h4>
                                        খেলা
                                    </h4>
                                    @foreach($posts_sports as $post)
                                        <a href="{{route('single_category', ['id'=>$post->category->id])}}">আরও >></a>
                                        @break
                                    @endforeach
                                </div>
                            </div>
                            @foreach($posts_sports->sortByDesc('id') as $post)
                                @if($loop->iteration < 5)
                                    <div class="block_news_item">
                                        <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                            <img src="{{$post->featured}}" alt="">
                                            <p>{{$post->title}}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-sm-4">
                            <div class="block_news">
                                <div class="title">
                                    <h4>
                                        মুক্তমঞ্চ
                                    </h4>
                                    @foreach($posts_tech as $post)
                                        <a href="{{route('single_category', ['id'=>$post->category->id])}}">আরও >></a>
                                        @break
                                    @endforeach
                                </div>
                            </div>

                            @foreach($posts_tech->sortByDesc('id') as $post)
                                @if($loop->iteration < 5)
                                    <div class="block_news_item">
                                        <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                            <img src="{{$post->featured}}" alt="">
                                            <p>{{$post->title}}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            </div>
                            


                    </div>



                </div>
            </div>
            <div class="col-sm-3">
                <div class="important_sidebar">
                    <div class="prayer_area">
                        <div class="heading">
                            <h4>নামাযের সময়সূচি</h4>
                        </div>
                        <img class="img-responsive" src="{{asset('images/mosque.jpg')}}" alt="">
                        <div class="prayer">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>ফযর</td>
                                        <td>৫ঃ১২</td>
                                    </tr>
                                    <tr>
                                        <td>যোহর</td>
                                        <td>১ঃ০০</td>
                                    </tr>
                                    <tr>
                                        <td>আসর</td>
                                        <td>৪ঃ৪৮</td>
                                    </tr>
                                    <tr>
                                        <td>মাগরিব</td>
                                        <td>৫ঃ৫৭</td>
                                    </tr>
                                    <tr>
                                        <td>এশা</td>
                                        <td>৭ঃ০৮</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

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



                    <div class="vote">
                        <h2>আজকের প্রশ্ন</h2>

                        <form action="{{ route('answer.store') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            @foreach($votes->sortByDesc('id') as $vote)
                                
                                <p>{{$vote->question}}</p>
                                @php($count = $vote->yes + $vote->no + $vote->neutral)
                                
                                @break
                                
                            @endforeach
                            <input type="hidden" name="question" class="question"  value="{{$vote->id}}" >
                            
                            <select name="answer" class="form-control" id="">
                                <option value="yes">হ্যা</option>
                                <option value="no">না</option>
                                <option value="neutral">মন্তব্য নেই</option>
                                
                            </select>

                            <?php
                                class BanglaConverter {
                                    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
                                    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
                                    
                                    public static function bn2en($number) {
                                        return str_replace(self::$bn, self::$en, $number);
                                    }
                                    
                                    public static function en2bn($number) {
                                        return str_replace(self::$en, self::$bn, $number);
                                    }
                                }
                                ?>
                            
                            <div class="text-center">
                                <button type="submit" name="vote" onclick="alert('আপনার ভোট গ্রহন সম্পন্ন হয়েছে')">ভোট দিন</button>
                                <a href="{{route('poll_result')}}">ফলাফল দেখুন</a>
                            </div>

                            <p class="vote_count" style="font-weight: normal;font-size: 15px;text-align: center; border: none;margin-top: 20px;">সর্বমোট ভোট দিয়েছেনঃ <?php echo BanglaConverter::en2bn($count);?> জন</p>
                        </form>
                    </div>
                    
                    

                    <div class="side_bulletin">
                        <div class="side_bulletin_item">
                            <h4>মন্তব্য</h4>

                            @foreach($posts_pollitics->sortByDesc('id') as $post)

                                <a href="{{route('singlenews',['id'=>$post->id])}}">
                                    <img src="{{asset($post->featured)}}" alt="">
                                    <p>
                                        {{$post->title}}
                                    </p>
                                </a>
                                @break
                            @endforeach
                        </div>
                        <div class="side_bulletin_item">
                            <h4>বিশ্লেষন</h4>
                            @foreach($posts_tech->sortByDesc('id') as $post)

                                <a href="{{route('singlenews',['id'=>$post->id])}}">
                                    <img src="{{asset($post->featured)}}" alt="">
                                    <p>
                                        {{$post->title}}
                                    </p>
                                </a>
                                @break
                            @endforeach
                        </div>
                        <div class="side_bulletin_item">
                            <h4>জীবন সংগ্রাম</h4>
                            @foreach($posts_sports->sortByDesc('id') as $post)

                                <a href="{{route('singlenews',['id'=>$post->id])}}">
                                    <img src="{{asset($post->featured)}}" alt="">
                                    <p>
                                        {{$post->title}}
                                    </p>
                                </a>
                                @break
                            @endforeach
                        </div>
                        <div class="side_bulletin_item">
                            <h4>চাকরি</h4>
                            @foreach($posts_entertainments->sortByDesc('id') as $post)

                                <a href="{{route('singlenews',['id'=>$post->id])}}">
                                    <img src="{{asset($post->featured)}}" alt="">
                                    <p>
                                        {{$post->title}}
                                    </p>
                                </a>
                                @break
                            @endforeach
                        </div>

                        <div class="side_bulletin_interview">
                            <h4>সাক্ষাতকার</h4>
                            @foreach($posts_bangladesh->sortByDesc('id') as $post)

                                <a href="{{route('singlenews',['id'=>$post->id])}}">
                                    <img src="{{asset($post->featured)}}" alt="">
                                    <p>
                                        {{$post->title}}
                                    </p>
                                </a>
                                @break
                            @endforeach
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Important Area -->


<!-- Sports Area -->
<div class="container">
    <div class="sports_area">
        
        <div class="header">
            
            @foreach($posts_sports as $post)
                <a href="{{route('single_category', ['id'=>$post->category->id])}}">
                    <h4>খেলা</h4>
                <span>আরও >></span>
                </a>
                @break
            @endforeach
        </div>
    

    <div class="row">
        @foreach($posts_sports->sortByDesc('id') as $post)
            @if($loop->iteration < 3)
                <div class="col-sm-6">
                        <div class="sports_big">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p class="title">{{$post->title}}</p>
                            </a>
                            <p class="details">{{ str_limit($post->content , $limit = 145, $end = '...')}}</p>
                        </div>
                    </div>
                
                @endif
                @if($loop->iteration == 2)
                    </div>
                        <div class="row">
                            <div class="sports_small">
                @endif

                @if($loop->iteration > 2)
                    
                    <div class="col-sm-3">
                        <div class="sports_small_item">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p class="title">{{ str_limit($post->title , $limit = 27, $end = '..')}}</p>
                            </a>
                            <p class="details">{{ str_limit($post->content , $limit = 120, $end = '...')}}</p>
                        </div>
                    </div>
                    @if($loop->iteration == 6)
                        @break
                    @endif
                @endif
            @endforeach

                     
                     
                </div>
            
        </div>


    </div>
</div>
<!-- End of Sports Area -->

<!-- Entertainment Area -->
<div class="container">
    <div class="entertainment_area">
        
        <div class="header">
            @foreach($posts_entertainments as $post)
                <a href="{{route('single_category', ['id'=>$post->category->id])}}">
                    <h4>{{$post->category->name}}</h4>
                <span>আরও >></span>
                </a>
                @break
            @endforeach
        </div>

        <div class="row">
        @foreach($posts_entertainments->sortByDesc('id') as $post)
            @if($loop->iteration < 4)
                <div class="col-sm-4">
                    <div class="entertainment_big">
                        <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                            <img src="{{$post->featured}}" alt="">
                            <p class="title">{{ str_limit($post->title , $limit = 30, $end = '..')}}</p>
                        </a>
                        <p class="details">{{ str_limit($post->content , $limit = 130, $end = '...')}}</p>
                    </div>
                </div>
                
                @endif
                @if($loop->iteration == 3)
                    </div>
                        <div class="row">
                            <div class="entertainment_small">

                @endif

                @if($loop->iteration > 3)
                    
                    <div class="col-sm-3">
                        <div class="entertainment_small_item">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p class="title">{{$post->title}}</p>
                            </a>
                            <p class="details">{{ str_limit($post->content , $limit = 120, $end = '...')}}</p>
                        </div>
                    </div>
                    @if($loop->iteration == 7)
                        @break
                    @endif
                @endif
            @endforeach

                     
                     
                </div>
            
        </div>
    </div>
</div>
<!-- End of Entertainment Area -->

<!-- Pollitics Area -->
<div class="container">
    <div class="pollitics_area">
        
        <div class="header">
            @foreach($posts_pollitics as $post)
                <a href="{{route('single_category', ['id'=>$post->category->id])}}">
                    <h4>{{$post->category->name}}</h4>
                <span>আরও >></span>
                </a>
                @break
            @endforeach
        </div>
        <div class="row">
            @foreach($posts_pollitics->sortByDesc('id') as $post)
                @if($loop->iteration < 2)
                    <div class="col-sm-6">
                        <div class="pollitics_big">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p>{{$post->title}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pollitics_small">
                    @else
                        <div class="pollitics_small_item">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p>{{$post->title}}</p>
                            </a>
                        </div>
                        @if($loop->iteration == 5)
                            @break
                        @endif


                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pollitics Area -->

<!-- Tech Area -->
<div class="container">
    <div class="tech_area">
        
        <div class="header">
            @foreach($posts_tech as $post)
                <a href="{{route('single_category', ['id'=>$post->category->id])}}">
                    <h4>{{$post->category->name}}</h4>
                <span>আরও >></span>
                </a>
                @break
            @endforeach
        </div>
        <div class="row">
            @foreach($posts_tech->sortByDesc('id') as $post)
                @if($loop->iteration < 2)
                    <div class="col-sm-6">
                        <div class="pollitics_big">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p>{{$post->title}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pollitics_small">
                    @else
                        <div class="pollitics_small_item">
                            <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                                <img src="{{$post->featured}}" alt="">
                                <p>{{$post->title}}</p>
                            </a>
                        </div>
                        @if($loop->iteration == 5)
                            @break
                        @endif


                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Tech Area -->

<!-- Footer Area -->


@include('layouts.footer')