<h1>Estoque</h1>
<button type="submit" class="btn btn-success" style="margin-bottom: 30px;" onclick="location.href='?page=cadastraritem';">+ Adiconar Item</button>
<?php

    $sql = "SELECT * FROM itens";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr style='background-color: #80ced6;'>";
            print "<th>Id do Item</th>";
            print "<th>Codigo</th>";
            print "<th>Descrição</th>";
            print "<th>Quantidade</th>";
            print "<th>Preço</th>";
            print "<th>Ação</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row->preco."</td>";
            print "<td style='display: flex; justify-content: center;'>
                    <button onclick=\"location.href='?page=cadastraritem&id=".$row->id."'\" style='margin-right: 10px;' class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir o item?')){location.href='?page=salvaritem&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>