<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
<script type='text/javascript' src='cep.js'></script>
<h1>Cadastro de Fornecedores</h1>
<form action="?page=salvarfornecedor" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome*</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone*</label>
        <input type="text" name="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email*</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <hr />

    <h5>Endereço</h5>
    <div class="mb-3" style="display: flex; justify-content: space-between;">
        <div style="width: 25%;">
            <label for="cep">CEP*</label>
            <input class="form-control" id="cep" name="cep" type="text" required />
        </div>
        <div style="width: 70%;">
            <label for="logradouro">Logradouro*</label>
            <input id="logradouro" type="text" required name="logradouro" class="form-control">
        </div>
    </div>
    <div class="mb-3" style="display: flex; justify-content: space-between;">
        <div style="width: 25%;">
            <label for="bairro">Bairro*</label>
            <input id="bairro" type="text" required name="bairro" class="form-control">
        </div>
        <div style="width: 30%;">
            <label for="cidade">Cidade*</label>
            <input id="cidade" type="text" required name="cidade" class="form-control">
        </div>
        <div style="width: 15%;">
            <label for="uf">Estado*</label>
            <select id="uf" name="estado" class="form-control" required>
                <option value="">Selecione o Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
        </div>
        <div style="width: 15%;">
            <label>Numero</label>
            <input id="numero" type="text" name="numero" class="form-control">
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</form>