<h1>Novo Orçamento</h1>
<form action="?page=salvarorcamento" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <input type="hidden" name="date">
    <div class="mb-3">
        <label>Cliente</label>
        <select id="cliente" name="cliente" class="form-control" required>
            <option value="">Selecione o cliente</option>
            <?php
            $sql = "SELECT * FROM clientes";

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


    <div class="mb-3">
        <label>Telefone</label>
        <input style="width: 25%;" type="text" name="telefone" class="form-control">
    </div>
    <hr />
    <div class="mb-3">
        <label>Colaborador</label>
        <select id="colaborador" name="colaborador" class="form-control" required>
            <option value="">Selecione o colaborador</option>
            <?php
            $sql = "SELECT * FROM colaboradores";

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
    <hr />
    <div class="mb-3">
        <label>Item</label>
        <div style="display: flex;">
            <input style="width: 25%;" type="text" name="item" class="form-control">
            <button style="margin-left: 10px;" type="submit" class="btn btn-secondary">Adicionar</button>
        </div>
    </div>
    <div class="mb-3">
        <!--  table não implementada! inserção manual apenas para testes -->
        <table class='table table-hover table-bordered'>
            <tr style='background-color: #80ced6;'>
                <th>Qtd</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>02</td>
                <td>item de exemplo</td>
                <td>R$ 10,00</td>
                <td>R$ 20,00</td>
            </tr>
        </table>
    </div>
    <div style="display: flex; align-items: center; justify-content: end;" class="mb-3">
        <label>Total:</label>
        <input style="width: 25%; margin-left: 10px;" type="text" name="total" class="form-control" readonly
            placeholder="R$ 20,00">
    </div>

    <hr />
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>