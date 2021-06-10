<?php
include("header.php")
?>

<!DOCTYPE html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/estiloFooter.css">
</head>

<body class="bd-light">
    <br>
    <main role="main" class="container">
        <h2>Doação</h2>

        <form class="form-horizontal" method="POST" action="confirmaDoacao.php">
            <fieldset>
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de doações</div>

                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-11 control-label">
                                <p class="help-block">
                                    * Campo Obrigatório
                                </p>
                            </div>
                        </div>

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

                            <label class="col-md-1 control-label" for="nascimento">Nascimento<h11>*</h11></label>
                            <div class="col-md-2">
                                <input id="dtnasc" name="dtnascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>

                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="telefone">Telefone <h11>*</h11></label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                </div>
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

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="valor">Valor da doação <h11>*</h11></label>
                            <div class="col-md-2">
                                <input id="cpf" name="valor" placeholder="Apenas números" class="form-control input-md" required="" type="text" pattern="[0-9]+$">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-md-2 control-label" for="selectbasic">Forma de Pagamento <h11>*</h11></label>

                            <div class="col-md-2">
                                <select  id="escolaridade" name="formaPagamento" class="form-control" required>
                                    <option value=""></option>
                                    <option value="credito">Cartão de Crédito</option>
                                    <option value="debito">Cartão de Débito</option>
                                    <option value="boleto">Boleto Bancário</option>
                                    <option value="picpay">PicPay</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" onclick="window.location.href = 'index.php'">Cancelar</button>
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Doar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </fieldset>
        </form>
        <br><br>
    </main>
    <footer">
        <?php
        include("footer.php")
        ?>
        </footer>
</body>

</html>

<script>
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i);

        if (texto.substring(0, 1) != saida) {
            documento.value += texto.substring(0, 1);
        }

    }

    function idade() {
        var data = document.getElementById("dtnasc").value;
        var dia = data.substr(0, 2);
        var mes = data.substr(3, 2);
        var ano = data.substr(6, 4);
        var d = new Date();
        var ano_atual = d.getFullYear(),
            mes_atual = d.getMonth() + 1,
            dia_atual = d.getDate();

        ano = +ano,
            mes = +mes,
            dia = +dia;

        var idade = ano_atual - ano;

        if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
            idade--;
        }
        return idade;
    }


    function exibe(i) {
        document.getElementById(i).readOnly = true;
    }

    function desabilita(i) {

        document.getElementById(i).disabled = true;
    }

    function habilita(i) {
        document.getElementById(i).disabled = false;
    }


    function showhide() {
        var div = document.getElementById("newpost");

        if (idade() >= 18) {

            div.style.display = "none";
        } else if (idade() < 18) {
            div.style.display = "inline";
        }

    }
</script>