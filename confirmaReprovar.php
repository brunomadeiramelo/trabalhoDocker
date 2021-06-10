<?php
session_start();
include("verificaLogin.php");
$id = $_SESSION['id'];
$_SESSION['id'] = $id;
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
    <title>Confirmação de reprovação</title>
</head>

<body>
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Deseja realmente reprovar?</h3>
                </div>
                <div class="modal-body">
                    Deseja reprovar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href = 'consultaCadastros.php'">Cancelar</button>
                    <button id="aprovar" name="aprovar" class="btn btn-success" type="submit" onclick="window.location.href ='reprovar.php'">Reprovar</button>
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