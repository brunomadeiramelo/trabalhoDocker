<?php
session_start();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['dtnascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$valor = $_POST['valor'];
$pagamento = $_POST['formaPagamento'];

$_SESSION['nome'] = $nome;
$_SESSION['cpf'] = $cpf;
$_SESSION['nascimento'] = $nascimento;
$_SESSION['telefone'] = $telefone;
$_SESSION['email'] = $email;
$_SESSION['valor'] = $valor;
$_SESSION['pagamento'] = $pagamento;

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
    <title>Confirmação de doação</title>
</head>

<body>
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Deseja realmente doar?</h3>
                </div>
                <div class="modal-body">
                    Deseja confirmar a doação?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href = 'index.php'">Cancelar</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location.href = 'salvarDoacao.php'">Doar</button>
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