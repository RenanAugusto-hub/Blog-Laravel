<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Título</label>
    <input type="text" name="title" value="{{ $post->title }}" placeholder="Título: ">
    
    <label for="">Conteudo</label>
    <!-- <input type="text" name="content" value="{{ $post->content }}" placeholder="Conteudo: "> -->
    <textarea name="content" placeholder="Conteúdo: ">{{ $post->content }}</textarea>
    
    <button type="submit">Salvar</button>
</form>