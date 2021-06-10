<?php
include("conexao.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
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
    <title>Retorno Situação</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM recebedor WHERE nome='$nome' and cpf='$cpf' and email='$email'";
    $con = $conexao->query($sql) or die($conexao->error);

    while ($a = $con->fetch_array()) {
        $situacao = $a['situacao'];
    }

    ?>

    <!-- Modal -->
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Situação do cadastro:</h3>
                </div>
                <div class="modal-body">
                    Seu cadastro <?php

                                    if ($situacao == 'aprovado') {
                                        echo " foi Aprovado, entraremos em contato com você em breve.";
                                    } else if ($situacao == 'reprovado') {
                                        echo "foi reprovado, enviamos no e-mail o motivo.";
                                    } else if ($situacao == '') {
                                        echo "ainda está em analise. Entraremos em contato em breve.";
                                    } else {
                                        echo "nao foi encontrado.";
                                    } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href = 'index.php'">Voltar ao Início</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#modal').modal('show');
        });
    </script>

</body>

</html>