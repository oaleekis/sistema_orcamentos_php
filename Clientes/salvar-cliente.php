<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $cnpj = $_POST["cnpj"];
        $data_nascimento = $_POST["data_nascimento"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $numero = $_POST["numero"];

        $sql = "INSERT INTO clientes (nome, cpf, rg, cnpj, data_nascimento, telefone, email, cep, logradouro, bairro, cidade, estado, numero) 
                VALUES ('{$nome}', '{$cpf}', '{$rg}', '{$cnpj}', '{$data_nascimento}', '{$telefone}', '{$email}', '{$cep}', 
                        '{$logradouro}', '{$bairro}', '{$cidade}', '{$estado}', '{$numero}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente cadastrado com sucesso');</script>";
            print "<script>location.href ='?page=listarclientes';</script>";
        } else {
            print "<script>alert('Não foi possivel efetuar o cadastro do cliente');</script>";
            print "<script>location.href ='?page=listarclientes';</script>";
        }
        break;
        case 'editar': 
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $cnpj = $_POST["cnpj"];
        $data_nascimento = $_POST["data_nascimento"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $numero = $_POST["numero"];
    
            $sql = "UPDATE clientes SET nome='{$nome}',
                                        cpf='{$cpf}', 
                                        rg='{$rg}', 
                                        cnpj='{$cnpj}', 
                                        data_nascimento='{$data_nascimento}',
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
                print "<script>alert('Colaborador editado com sucesso');</script>";
                print "<script>location.href ='?page=listarclientes';</script>";
            } else {
                print "<script>alert('Não foi possivel editar o colaborador');</script>";
                print "<script>location.href ='?page=listarclientes';</script>";
            }
    
            break;

    case 'excluir':

        $sql = "DELETE FROM clientes WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cliente excluido com sucesso');</script>";
            print "<script>location.href ='?page=listarclientes';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o Cliente');</script>";
            print "<script>location.href ='?page=listarclientes';</script>";
        }
        break;
}
?>