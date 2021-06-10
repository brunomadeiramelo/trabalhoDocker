<?php
include("header.php")
?>

<!DOCTYPE html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bd-light">
    <br>
    <main role="main" class="container">
        <h2>Cadastro para receber doações</h2>

        <form class="form-horizontal" method="POST" action="salvarCadastro.php">
            <fieldset>
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro para receber doações</div>

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
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Razão Social</label>
                            <div class="col-md-8">
                                <input id="razaoSocial" name="razaoSocial" placeholder="" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>
                            <div class="col-md-2">
                                <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                            </div>
                            <label class="col-md-1 control-label" for="cnpj">CNPJ </label>
                            <div class="col-md-2">
                                <input id="cnpj" name="cnpj" placeholder="Apenas números" class="form-control input-md" type="text" maxlength="12" pattern="[0-9]+$">
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

                            <label class="col-md-1 control-label" for="telefone2">Telefone2</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="telefone2" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
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


                        <!-- Search input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                            <div class="col-md-2">
                                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rua</span>
                                    <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Nº <h11>*</h11></span>
                                    <input id="numero" name="numero" class="form-control" placeholder="" required="" type="text">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Bairro</span>
                                    <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext"></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Cidade</span>
                                    <input id="cidade" name="cidade" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>

                            </div>

                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Estado</span>
                                    <input id="estado" name="estado" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="descricao">Descrição <h11>*</h11></label>
                            <div class="col-md-8">
                                <textarea id="Nome" name="descricao" placeholder="Escreva aqui detalhes do seu projeto e como pretende usar as doações" rows="6" class="form-control input-md" required=""></textarea>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" onclick="window.location.href = 'index.php'">Cancelar</button>
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                            </div>
                        </div>

                    </div>
                </div>


            </fieldset>
        </form>
    </main>

    <br><br>
    <footer">
        <?php
        include("footer.php")
        ?>
        </footer>
</body>

</html>

<script>
    function limpa_formulario_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('estado').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('estado').value = (conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulario_cep();
            alert("CEP não encontrado.");
            document.getElementById('cep').value = ("");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep !== "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('estado').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cep();
        }
    }

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