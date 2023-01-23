<h1>Novo Item</h1>
<form action="?page=salvaritem" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Codigo*</label>
        <input type="text" name="codigo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descrição*</label>
        <input type="text" name="descricao" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade*</label>
        <input type="text" name="quantidade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Preço*</label>
        <input type="text" name="preco" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>