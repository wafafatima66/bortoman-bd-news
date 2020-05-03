@include('layouts.header')
<!-- End Time Bar -->


<!-- Feature Area -->
<div class="container">
    <div class="search_area">
        <div class="row">
            @foreach($posts->sortByDesc('id') as $post)

                <div class="search_item">
                    <a href="{{ route('singlenews', ['id'=>$post->id]) }}">
                        <img src="{{$post->featured}}" alt="">
                        <p class="title">{{$post->title}}</p>
                            </a>
                            <p class="details">{{ str_limit($post->content , $limit = 350, $end = '...')}}</p>
                </div>

            @endforeach
                 
        </div>
    </div>
</div>


<div class="clear_fix"></div>


@include('layouts.footer')