<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $codigo = $_POST["codigo"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];

        $sql = "INSERT INTO itens (codigo, descricao, quantidade, preco) 
                VALUES ('{$codigo}', '{$descricao}', '{$quantidade}', '{$preco}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Item cadastrado com sucesso');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        } else {
            print "<script>alert('Não foi possivel efetuar o cadastro do Item');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        }
        break;
    case 'editar': 
        $codigo = $_POST["codigo"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];

        $sql = "UPDATE itens SET codigo='{$codigo}',
                                    descricao='{$descricao}', 
                                    quantidade='{$quantidade}', 
                                    preco='{$preco}'
                                WHERE 
                                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Item editado com sucesso');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        } else {
            print "<script>alert('Não foi possivel editar o item');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM itens WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Item excluido com sucesso');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o item');</script>";
            print "<script>location.href ='?page=estoque';</script>";
        }
        break;
}
?>