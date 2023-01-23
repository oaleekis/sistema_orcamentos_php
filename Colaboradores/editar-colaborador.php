<h1>Editar Colaborador</h1>
<?php 
    $sql = "SELECT * FROM colaboradores WHERE id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvarcolaborador" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome*</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone*</label>
        <input type="text" name="telefone" class="form-control" value="<?php print $row->telefone; ?>" required>
    </div>
    <div class="mb-3">
        <label>Email*</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" required>
    </div>
    <div class="mb-3">
        <label>Senha*</label>
        <input type="password" name="senha" class="form-control" value="<?php print $row->senha; ?>" required>
    </div>
    <div class="mb-3">
        <label>Matricula*</label>
        <input type="text" name="matricula" class="form-control" value="<?php print $row->matricula; ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>