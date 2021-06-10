<?php
include("conexao.php");
session_start();
$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
$nascimento = $_SESSION['nascimento'];
$telefone = $_SESSION['telefone'];
$email = $_SESSION['email'];
$valor = $_SESSION['valor'];
$pagamento = $_SESSION['pagamento'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <title>Confirmação de cadastro</title>
</head>

<body>

    <?php

    //sql para inserção do registro
    $sql = "INSERT INTO doacao (nome, cpf, nascimento, telefone, email, valor, pagamento) VALUES ('$nome', '$cpf', '$nascimento', '$telefone', '$email', $valor, '$pagamento');";

    //Insere e verifica a inserção dos dados
    if (!mysqli_query($conexao, $sql)) {
        die('Erro ao realizar doação.');
    };

    ?>

    <!-- Modal -->
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Doação realizado com Sucesso!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Doação confirmada!.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href = 'index.php'">Voltar ao Início</button>
                </div>
            </div>
        </div>
    </div>


    <?php

    // fechando conexão
    mysqli_close($conexao);
    session_destroy();
    ?>
    <script>
        $(document).ready(function() {
            $('#modal').modal('show');
        });
    </script>

</body>

</html>