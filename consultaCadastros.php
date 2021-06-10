<?php
session_start();
include("verificaLogin.php");

//inclui a classe conexao.php
include("conexao.php");

//CONSULTA ORDENADA POR ID
$sql = "SELECT id, nome, telefone, email, cidade, bairro, situacao FROM recebedor ORDER BY id";
$con = $conexao->query($sql) or die($conexao->error);
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/estiloFooter.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <title>Consulta de Cadastros</title>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">

                <div class="navbar-header">
                    <!-- LOGO -->
                    <a href="index.php" alt="home" title="Início"><img id="logo" src="img/logo.jpg"></a>

                    <!-- SMARTPHONE -->
                    <button type="button" style="margin-top:25px" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_lista" aria-expanded="false">
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                        <span style="background-color:#9bbd46" class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="menu_lista">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="link_menu"><a href="doar.php">Faça uma doação</a></li>
                        <li class="link_menu"><a href="receberDoacoes.php">Receba doações</a></li>
                        <li class="link_menu"><a href="iniciativa.php">Quem somos nós</a></li>
                        <li class="link_menu"><a href="logout.php">Sair</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
</head>

<body>
    <br>
    <br>
    <main role="main" class="container">
        <div class="align-center p-3 my-2">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-condensed table-hover" id="tabela">
                            <thead class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Situação</th>
                                <th scope="col">Ação</th>
                            </thead>
                            <tbody>
                                <?php while ($a = $con->fetch_array()) { ?>
                                    <tr>
                                        <td> <?php echo $a["id"];  ?> </td>
                                        <td> <?php echo $a["nome"];  ?> </td>
                                        <td> <?php echo $a["telefone"];  ?> </td>
                                        <td> <?php echo $a["email"];  ?> </td>
                                        <td> <?php echo $a["cidade"];  ?> </td>
                                        <td> <?php echo $a["bairro"];  ?> </td>
                                        <td> <?php if ($a["situacao"] == 'aprovado') {
                                                ?>Aprovado
                                            <?php } else if ($a["situacao"] == 'reprovado') {
                                            ?>Reprovado
                                            <?php } else if ($a["situacao"] == '') {
                                            ?>Pendente
                                        <?php

                                                };  ?> </td>
                                        <td>

                                            <a href="consultaSituacao.php?id= <?php echo $a["id"]; ?>" class="btn btn-primary">Verificar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <a href="administrativo.php" class="btn btn-primary">Voltar</a>
    </main>
    <footer">

        <?php
        include("footer.php");
        ?>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


        <!--    Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>


        <script>
            $(document).ready(function() {
                $('#tabela').DataTable({
                    "bFilter": false,
                    language: {
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ Resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "oPaginate": {
                            "sFirst": "Primeiro",
                            "sPrevious": "Anterior",
                            "sNext": "Seguinte",
                            "sLast": "Último"
                        }
                    }
                });
            });
        </script>


</body>

</html>