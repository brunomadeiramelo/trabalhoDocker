<?php
include("conexao.php");

$nome = $_POST['nome'];
$razaoSocial = $_POST['razaoSocial'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$nascimento = $_POST['dtnascimento'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$descricao = $_POST['descricao'];
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



    $sql = "INSERT INTO `recebedor` (`nome`, `razaoSocial`, `cpf`, `cnpj`, `nascimento`, `telefone`, `telefone2`, `email`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `descricao`) 
    VALUES ('$nome', '$razaoSocial', '$cpf', '$cnpj', '$nascimento', '$telefone', '$telefone2', '$email', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$descricao')";

    //Insere e verifica a inserção dos dados
    if (!mysqli_query($conexao, $sql)) {
    ?>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Erro ao cadastrar!</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       Provavelmente essa solicitação já foi cadastrada.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href = 'index.php'">Voltar ao Início</button>
                    </div>
                </div>
            </div>
        </div>

    <?php

    };

    ?>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Cadastro realizado com Sucesso!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Seu cadastro será analisado, entraremos em contato por e-mail ou telefone. Você também pode acompanhar o status da sua solicitação em nosso site.
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