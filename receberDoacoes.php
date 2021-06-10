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
    <title>Doações</title>
</head>

<body class="bd-light">
    <br>
    <main role="main" class="container">
        <h2>Cadastro para receber doações</h2>
        <p>Para receber doações é necessário realizar um cadastro em nosso sistema, que será analizada posteriormente. Caso já tenha feito um cadastro, você pode acompanhar como está o status da solicitação.</p>
        <br>
        <a href="acompanharCadastro.php" class="btn btn-primary">Acompanhar cadastro</a>
        <a href="formularioReceber.php" class="btn btn-primary">Realizar Cadastro</a>
    </main>
    <br><br>
    <footer">
        <?php
        include("footer.php")
        ?>
    </footer>
</body>

</html>