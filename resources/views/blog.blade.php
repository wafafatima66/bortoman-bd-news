@foreach($posts as $post )
    @if($loop->iteration < 2)
        <img src="{{ $post->featured }}" alt="">
        <h2>{{ $category->name }}</h2>
     @endif
@endforeach