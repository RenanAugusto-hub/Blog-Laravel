@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif

<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Título</label>
    <input type="text" name="title" value="{{ $post->title }}" placeholder="Título: ">
    @if ($errors->has('title'))
        {{ $errors->first('title') }}
    @endif 

    <label for="">Conteudo</label>
    <textarea name="content" placeholder="Conteúdo: ">{{ $post->content }}</textarea>
        @if ($errors->has('content'))
            {{ $errors->first('content') }}
        @endif    
    <button type="submit">Salvar</button>
</form>