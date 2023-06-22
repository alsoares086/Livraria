<form action="/livros" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" class="form-control">
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" class="form-control">
    </div>
    <div class="form-group">
        <label for="ano">Ano de Publicação:</label>
        <input type="number" name="ano" id="ano" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Livro</button>
</form>