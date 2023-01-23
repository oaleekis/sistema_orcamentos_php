<h1>Editar Item</h1>
<?php 
    $sql = "SELECT * FROM itens WHERE id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvaritem" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Codigo*</label>
        <input type="text" name="codigo" class="form-control" value="<?php print $row->codigo; ?>" required>
    </div>
    <div class="mb-3">
        <label>Descrição*</label>
        <input type="text" name="descricao" class="form-control" value="<?php print $row->descricao; ?>" required>
    </div>
    <div class="mb-3">
        <label>Quantidade*</label>
        <input type="text" name="quantidade" class="form-control" value="<?php print $row->quantidade; ?>" required>
    </div>
    <div class="mb-3">
        <label>Preço*</label>
        <input type="text" name="preco" class="form-control" value="<?php print $row->preco; ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>