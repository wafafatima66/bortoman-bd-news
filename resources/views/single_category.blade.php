@include('layouts.header')
<!-- Feature Area -->

<!-- Important Area -->
<div class="container">
	<div class="single_wrapper"></div>
	<h2 class="category_name">{{$name->name}}ঃ</h2>
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

					
					
					<div class="more_news text-center">
						<a href="" class="btn btn-default btn-lg">আরও খবর</a>
					</div>

					



				</div>
			</div>

		</div>
	</div>
</div>

<!-- End of Important Area -->
@include('layouts.footer')