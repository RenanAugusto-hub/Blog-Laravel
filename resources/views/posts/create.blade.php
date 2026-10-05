    <h1>Criar Post</h1>

    <form action="/posts" method="POST">
        
        @csrf
        <label for="">Título</label>
        <input type="text" name="title" placeholder="Título: ">
        
        <label for="">Conteudo</label>
        <!-- <input type="text" name="content" placeholder="Conteudo: "> -->
        <textarea name="content" placeholder="Conteúdo"></textarea>
        
        <button type="submit">Salvar</button>
    </form>
