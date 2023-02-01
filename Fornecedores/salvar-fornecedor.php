<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $numero = $_POST["numero"];

        $sql = "INSERT INTO fornecedores (nome, telefone, email, cep, logradouro, bairro, cidade, estado, numero)
                VALUES ('{$nome}', '{$telefone}', '{$email}', '{$cep}', 
                        '{$logradouro}', '{$bairro}', '{$cidade}', '{$estado}', '{$numero}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Fornecedor cadastrado com sucesso');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        } else {
            print "<script>alert('Não foi possivel efetuar o cadastro do fornecedor');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        }
        break;
    case 'editar': 
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $numero = $_POST["numero"];

        $sql = "UPDATE fornecedores SET nome='{$nome}',
                                    telefone='{$telefone}', 
                                    email='{$email}', 
                                    cep='{$cep}',
                                        logradouro='{$logradouro}',
                                        bairro='{$bairro}',
                                        cidade='{$cidade}',
                                        estado='{$estado}',
                                        numero='{$numero}'
                                WHERE 
                                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Fornecedor editado com sucesso');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        } else {
            print "<script>alert('Não foi possivel editar o fornecedor');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM fornecedores WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Fornecedor excluido com sucesso');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o fornecedor');</script>";
            print "<script>location.href ='?page=listarfornecedor';</script>";
        }
        break;
}
?>