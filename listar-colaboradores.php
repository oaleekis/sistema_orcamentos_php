<h1>Lista de Colaboradores</h1>
<?php

    $sql = "SELECT * FROM colaboradores";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr style='background-color: #80ced6;'>";
            print "<th>Id</th>";
            print "<th>Nome</th>";
            print "<th>Telefone</th>";
            print "<th>Email</th>";
            print "<th>Matricula</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->matricula."</td>";
            print "<td style='display: flex;'>
                    <button onclick=\"location.href='?page=editarcolaborador&id=".$row->id."'\" style='margin-right: 10px;' class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir o usuario?')){location.href='?page=salvarcolaborador&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>