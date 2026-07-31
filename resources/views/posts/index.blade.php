@foreach ($posts as $post)
    {{ $post->title }}
    {{ $post->content }}
@endforeach