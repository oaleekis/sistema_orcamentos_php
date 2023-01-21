<h1>Novo Orçamento</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <input type="hidden" name="date">
    <div class="mb-3">
        <label>Cliente</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input style="width: 25%;" type="text" name="telefone" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input style="width: 50%;" type="email" name="email" class="form-control" readonly>
    </div>
    <hr />
    <div class="mb-3">
        <label>Colaborador</label>
        <input type="text" name="colaborador" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Matricula</label>
        <input style="width: 25%;" type="text" name="matricula" class="form-control" readonly>
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