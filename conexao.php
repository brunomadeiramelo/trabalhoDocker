<?php
$servidor = 'db';
$usuario = 'root';
//$usuario = 'id13992976_root';
$senha = '';
//$senha = '?y-TQDk}La*^7!E_';
$bancoDados = 'id13992976_pi';

//cria a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

//verifica a conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
