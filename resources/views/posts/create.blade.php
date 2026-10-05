    <h1>Criar Post</h1>

    <form action="/posts" method="POST">
        
        @csrf
        <label for="">Título</label>
        <input type="text" name="title" placeholder="Título: ">
        @if ($errors->has('title'))
            {{ $errors->first('title') }}
        @endif
        
        <label for="">Conteudo</label>
        <textarea name="content" placeholder="Conteúdo"></textarea>
        @if ($errors->has('content'))
            {{ $errors->first('content') }}
        @endif

        <button type="submit">Salvar</button>
    </form>
