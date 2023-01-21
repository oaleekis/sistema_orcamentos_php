<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $matricula = $_POST["matricula"];

        $sql = "INSERT INTO colaboradores (nome, telefone, email, senha, matricula) 
                VALUES ('{$nome}', '{$telefone}', '{$email}', '{$senha}', '{$matricula}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Colaborador cadastrado com sucesso');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        } else {
            print "<script>alert('Não foi possivel efetuar o cadastro do cliente');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        }
        break;
    case 'editar': 
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $matricula = $_POST["matricula"];

        $sql = "UPDATE colaboradores SET nome='{$nome}',
                                    telefone='{$telefone}', 
                                    email='{$email}', 
                                    senha='{$senha}', 
                                    matricula='{$matricula}'
                                WHERE 
                                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Colaborador editado com sucesso');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        } else {
            print "<script>alert('Não foi possivel editar o colaborador');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM colaboradores WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Colaborador excluido com sucesso');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o colaborador');</script>";
            print "<script>location.href ='?page=listarcolaboradores';</script>";
        }
        break;
}
?>