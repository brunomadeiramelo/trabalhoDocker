<?php
include("header.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloFooter.css">
    <title>Situação do cadastro</title>
</head>

<body class="bd-light">
    <br>
    <main role="main" class="container">
        <h2>Situação do cadastro</h2>
        <p>Para saber a situação do seu cadastro, é necessário que nos confirme alguns dados:</p>
        <br>

        <form class="form-horizontal" method="POST" action="retornoSituacao.php">
            <fieldset>
                <div class="panel panel-default">
                    <div class="panel-heading">Situação do cadastro</div>

                    <br>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                        <div class="col-md-8">
                            <input id="Nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>
                        <div class="col-md-2">
                            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                        </div>
                    </div>
                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" onclick="window.location.href = 'index.php'">Cancelar</button>
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Consultar</button>
                        </div>
                    </div>

                </div>
                </div>

            </fieldset>
        </form>
    </main>
    <br><br>
    <footer">
        <?php
        include("footer.php")
        ?>
        </footer>
</body>

</html>