<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema 001</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=orcamento">Orçamento</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cliente">Cliente</a></li>
                            <li><a class="dropdown-item" href="?page=colaborador">Colaborador</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?page=listarclientes">Listar Clientes</a></li>
                            <li><a class="dropdown-item" href="?page=listarcolaboradores">Listar Colaboradores</a></li>
                            <li><a class="dropdown-item" href="?page=listaorcamentos">Listar Orçamentos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "orcamento";
                        include("novo-orcamento.php");
                        break;
                    case "cliente";
                        include("novo-cliente.php");
                        break;
                    case "colaborador":
                        include("novo-colaborador.php");
                        break;
                    case "listaorcamentos":
                        include("listar-orcamento.php");
                        break;
                    case "salvar":
                        include("salvar-cliente.php");
                        break;
                    case "editar":
                        include("editar-cliente.php");
                        break;
                    case "salvarcolaborador":
                        include("salvar-colaborador.php");
                        break;
                    case "editarcolaborador":
                        include("editar-colaborador.php");
                        break;
                    case "listarclientes":
                        include("listar-clientes.php");
                        break;
                    case "listarcolaboradores":
                        include("listar-colaboradores.php");
                        break;
                    default:
                        print "<h1>Bem vindo!</h1>";
                }
                ?>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>


</html>