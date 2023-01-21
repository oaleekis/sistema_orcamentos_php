<h1>Lista de Orçamentos</h1>
<?php

    $sql = "SELECT * FROM orcamento";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr style='background-color: #80ced6;'>";
            print "<th>Id do Orçamento</th>";
            print "<th>Cliente</th>";
            print "<th>Telefone</th>";
            print "<th>Email</th>";
            print "<th>Colaborador</th>";
            print "<th>Matricula</th>";
            print "<th>Total do Orçamento</th>";
            print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->cliente."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->colaborador."</td>";
            print "<td>".$row->matricula."</td>";
            print "<td>".$row->total."</td>";
            print "<td style='display: flex;'>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir o orçamento?')){location.href='?page=salvarorcamento&acao=excluir&id=".$row->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>