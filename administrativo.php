<?php
session_start();
include("verificaLogin.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estiloFooter.css">
    <link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <title>Painel Administrativo</title>
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

</html>
</head>

<body class="bd-light">

    <br>
    <main role="main" class="container">
        <h2>Painel de controle para funcionários. O que deseja fazer?</h2>


        <div class="container">
            <!-- Exemplo de linha de colunas -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <h3>Consultar doações</h3>
                    <br>
                    <a href="consultaDoacoes.php" class="btn btn-primary">Consultar doações</a>
                </div>
                <div class="col-md-4">
                    <h3>Consultar cadastros</h3>
                    <br>
                    <a href="consultaCadastros.php" class="btn btn-primary">Consultar cadastros</a>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </main>
    <footer">
        <?php
        include("footer.php")
        ?>
        </footer>
</body>

</html>