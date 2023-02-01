<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $codigo = $_POST["codigo"];
        $tipo = $_POST["tipo"];
        $custo = $_POST["custo"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $fornecedor = $_POST["fornecedor"];
        $tamanho = $_POST["tamanho"];
        $quantidade = $_POST["quantidade"];

        $sql = "INSERT INTO itens (codigo, tipo, custo, preco, descricao, fornecedor, tamanho, quantidade) 
                VALUES ('{$codigo}', '{$tipo}', '{$custo}', '{$preco}', '{$descricao}', '{$fornecedor}', '{$tamanho}', '{$quantidade}')";

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
        $tipo = $_POST["tipo"];
        $custo = $_POST["custo"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $fornecedor = $_POST["fornecedor"];
        $tamanho = $_POST["tamanho"];
        $quantidade = $_POST["quantidade"];

        $sql = "UPDATE itens SET codigo='{$codigo}',
                                    tipo='{$tipo}', 
                                    custo='{$custo}', 
                                    preco='{$preco}',
                                    descricao='{$descricao}',
                                    fornecedor='{$fornecedor}',
                                    tamanho='{$tamanho}',
                                    quantidade='{$quantidade}'
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