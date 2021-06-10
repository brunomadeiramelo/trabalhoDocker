<?php
session_start();
include("verificaLogin.php");
include("conexao.php");
$id = $_SESSION['id'];
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
    <title>Aprovação</title>
</head>

<body>

    <?php

    //sql para inserção do registro
    $sql = "UPDATE recebedor SET situacao = 'aprovado' WHERE id = $id";

    //Insere e verifica a inserção dos dados
    if (!mysqli_query($conexao, $sql)) {
        die('Erro ao aprovar.');
    };

    ?>

    <!-- Modal -->
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Cadastro aprovado!</h3>
                </div>
                <div class="modal-body">
                    Aprovado!
                </div>
                <div class="modal-footer">
                    <a href="consultaCadastros.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>


    <?php

    // fechando conexão
    mysqli_close($conexao);
    ?>
    <script>
        $(document).ready(function() {
            $('#modal').modal('show');
        });
    </script>

</body>

</html>