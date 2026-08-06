<a href="/posts/create">Cadastrar</a>
<h1>Posts</h1>
@foreach($posts as $post)
    {{ $post->title }} <br>
    {{ $post->content }} <br>
    <a href="/posts/{{ $post->id }}/edit">Editar</a> 
    <a href="/posts/{{ $post->id }}">Mostrar</a> 
    <form action="/posts/{{ $post->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE') 
        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este post?')" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline; padding: 0;">
            Deletar
        </button>
    </form>
    <br><br>
@endforeach