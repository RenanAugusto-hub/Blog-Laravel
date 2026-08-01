@foreach ($posts as $post)
    {{ $post->title }} <br>
    {{ $post->content }} <br><br>
@endforeach