<?php
session_start();
include("verificaLogin.php");
include('header.php');
include("conexao.php");

//recebe o id atraves do metodo get, pela pagina index.php ou pesquisa.php
$id = $_GET['id'];
$_SESSION['id'] = $id;


$sql = "SELECT * FROM recebedor WHERE id = $id";
$con = $conexao->query($sql) or die($conexao->error);
$a = $con->fetch_array()
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consulta Situação</title>
</head>

<body>
    <main role="main" class="container">
        <h2>Consulta de Cadastro</h2>

        <form class="form-horizontal" method="POST" action="salvarCadastro.php">
            <fieldset>
                <div class="panel panel-default">
                    <div class="panel-heading">Consulta de cadastro</div>

                    <div class="panel-body">
                        <br>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Nome </label>
                            <div class="col-md-8">
                                <input id="Nome" name="nome" placeholder="" class="form-control input-md" value="<?php echo $a["nome"]; ?>" readonly="readonly" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Razão Social</label>
                            <div class="col-md-8">
                                <input id="razaoSocial" name="razaoSocial" placeholder="" class="form-control input-md" value="<?php echo $a["razaoSocial"]; ?>" readonly="readonly" type="text">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cpf">CPF </label>
                            <div class="col-md-2">
                                <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" value="<?php echo $a["cpf"]; ?>" readonly="readonly" type="text" maxlength="11" pattern="[0-9]+$">
                            </div>
                            <label class="col-md-1 control-label" for="cnpj">CNPJ </label>
                            <div class="col-md-2">
                                <input id="cnpj" name="cnpj" placeholder="Apenas números" class="form-control input-md" value="<?php echo $a["cnpj"]; ?>" readonly="readonly" type="text" maxlength="12" pattern="[0-9]+$">
                            </div>

                            <label class="col-md-1 control-label" for="nascimento">Nascimento</label>
                            <div class="col-md-2">
                                <input id="dtnasc" name="dtnascimento" placeholder="DD/MM/AAAA" class="form-control input-md" value="<?php echo $a["nascimento"]; ?>" readonly="readonly" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>

                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="telefone">Telefone </label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" value="<?php echo $a["telefone"]; ?>" readonly="readonly" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                </div>
                            </div>

                            <label class="col-md-1 control-label" for="telefone2">Telefone2 </label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="telefone2" class="form-control" placeholder="XX XXXXX-XXXX" value="<?php echo $a["telefone2"]; ?>" readonly="readonly" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                </div>
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="email">Email </label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" value="<?php echo $a["email"]; ?>" readonly="readonly" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                </div>
                            </div>
                        </div>


                        <!-- Search input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="CEP">CEP </label>
                            <div class="col-md-2">
                                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" value="<?php echo $a["cep"]; ?>" readonly="readonly" value="" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Endereço </label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rua</span>
                                    <input id="rua" name="rua" class="form-control" placeholder="" value="<?php echo $a["rua"]; ?>" readonly="readonly" readonly="readonly" type="text">
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Nº </span>
                                    <input id="numero" name="numero" class="form-control" placeholder="" value="<?php echo $a["numero"]; ?>" readonly="readonly" type="text">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Bairro</span>
                                    <input id="bairro" name="bairro" class="form-control" placeholder="" value="<?php echo $a["bairro"]; ?>" readonly="readonly" readonly="readonly" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext"></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Cidade</span>
                                    <input id="cidade" name="cidade" class="form-control" placeholder="" value="<?php echo $a["cidade"]; ?>" readonly="readonly" readonly="readonly" type="text">
                                </div>

                            </div>

                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Estado</span>
                                    <input id="estado" name="estado" class="form-control" placeholder="" value="<?php echo $a["estado"]; ?>" readonly="readonly" readonly="readonly" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="descricao">Descrição </label>
                            <div class="col-md-8">
                                <textarea id="Nome" name="descricao" rows="6" class="form-control input-md" readonly="readonly"><?php echo $a["descricao"]; ?></textarea>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <?php

                                    if($a['situacao'] == 'aprovado'){
                                        ?>
                                        <a href="consultaCadastros.php" class="btn btn-primary">Voltar</a>
                                        <a href="confirmaReprovar.php" class="btn btn-danger">Reprovar</a>
                                        <?php
                                        
                                    } else if($a['situacao'] == 'reprovado'){
                                        ?>
                                        <a href="consultaCadastros.php" class="btn btn-primary">Voltar</a>
                                        <a href="confirmaAprovar.php" class="btn btn-success">Aprovar</a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="consultaCadastros.php" class="btn btn-primary">Voltar</a>
                                        <a href="confirmaReprovar.php" class="btn btn-danger">Reprovar</a>
                                        <a href="confirmaAprovar.php" class="btn btn-success">Aprovar</a>
                                        <?php
                                    
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>