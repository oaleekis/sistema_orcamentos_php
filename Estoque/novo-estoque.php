<h1>Novo Item</h1>
<form action="?page=salvaritem" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="mb-3">
            <label>Codigo*</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tipo*</label>
            <select id="tipo" name="tipo" class="form-control" required>
                <option value="">Selecione o Tipo</option>
                <option value="intima">Moda Intima</option>
                <option value="casual">Moda Casual</option>
                <option value="fitness">Moda Fitness</option>
            </select>
        </div>
        <div class="mb-3">
            <label>$ de Aquisição*</label>
            <input type="text" name="custo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>$ de Venda*</label>
            <input type="text" name="preco" class="form-control" required>
        </div>
    </div>
    <div class="mb-3">
        <label>Descrição*</label>
        <input type="text" name="descricao" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Fornecedor</label>
        <select id="fornecedor" name="fornecedor" class="form-control">
            <option value="">Selecione o fornecedor</option>
            <?php
            $sql = "SELECT * FROM fornecedores";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if ($qtd > 0) {
                while ($row = $res->fetch_object()) {
                    print "<option value=" . $row->nome . ">" . $row->nome . "</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="mb-3" style="display: flex; align-items: center;">
        <div class="mb-3">
            <label>Tamanho*</label>
            <select id="tamanho" name="tamanho" class="form-control" required>
                <option value="">Selecione o Tamanho</option>
                <option value="PP">PP</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
                <option value="XG">XG</option>
            </select>
        </div>
        <div class="mb-3" style="margin-left: 20px; width: 80px;">
            <label>Qtd*</label>
            <input type="text" name="quantidade" class="form-control" required>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>

