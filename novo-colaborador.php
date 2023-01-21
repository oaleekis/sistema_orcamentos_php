<!--  tela não implementada! -->


<h1>Cadastro de Colaboradores</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome*</label>
        <input type="text" name ="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone*</label>
        <input type="text" name ="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email*</label>
        <input type="email" name ="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Senha*</label>
        <input type="password" name ="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Matricula*</label>
        <input type="text" name ="matricula" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>