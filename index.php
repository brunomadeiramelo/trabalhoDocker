<?php
include("header.php");
?>
<!doctype html>
<html>

<head>
	<title>Ação Solidária</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
</head>

<body>

	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-xs-12">
					<div id="meu_carrossel" class="carousel slide" data-ride="carousel">

						<!-- PONTOS REPRESENTATIVOS DE IMAGENS -->
						<ol class="carousel-indicators">
							<li data-target="#meu_carrossel" data-slide-to="0" class="active"></li>
							<li data-target="#meu_carrossel" data-slide-to="1"></li>
							<li data-target="#meu_carrossel" data-slide-to="2"></li>
						</ol>

						<!-- IMAGENS -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/img1.jpg" class="img-thumbnail">
								<div class="carousel-caption">
								</div>
							</div>

							<div class="item">
								<img src="img/img2.jpg" class="img-thumbnail" >
								<div class="carousel-caption">
								</div>
							</div>

							<div class="item">
								<img src="img/img4.jpg" class="img-thumbnail">
								<div class="carousel-caption">
								</div>
							</div>

						</div>

						<!-- CONTROLES -->
						<a class="left carousel-control" href="#meu_carrossel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>
						<a class="right carousel-control" href="#meu_carrossel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Próximo</span>
						</a>
					</div>
				</div>

				<div class="col-md-7 col-xs-12">
					<h1>Ação Solidária!</h1>
					<p>O projeto tem como objetivo auxiliar neste momento de dificuldade relacionado a pandemia. Nele
						será possível criar uma ponte digital, entre doadores e os necessitados ajudando e
						possibilitando doações para instituições que se cadastrem na nossa plataforma no vale do aço.
					</p>

				</div>
			</div>
		</div>
	</div>
	<div id="middle">
		<div class="container">

			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/iniciativa.jpg" class="img-thumbnail">

						<div class="caption">
							<h3>Conheça nossa iniciativa</h3>
							<p>Esse projeto foi feito pensando em ajudar pessoas que tiveram suas rendas afetadas com o
								corona vírus. Com isso estamos aceitando doações em roupas, alimentos, alcool em gel e
								máscaras. Contamos com o apoio de todos.</p>
							<p><a href="iniciativa.php" class="btn btn-primary" role="button">Leia mais</a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/corona.jpg" class="img-thumbnail">
						<div class="caption">
							<h3>Saiba mais sobre o corona</h3>
							<p>A COVID-19 é uma doença causada pelo coronavírus SARS-CoV-2, que apresenta um quadro
								clínico que varia de infecções assintomáticas a quadros respiratórios graves. O melhor
								rémedio contra o vírus é a prevenção.</p>
							<p><a href="saibaMais.php" class="btn btn-primary" role="button">Leia mais</a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/ajuda.jpg" class="img-thumbnail">
						<div class="caption">
							<h3>Faça sua doação</h3>
							<p>Vamos juntos combater a COVID-19 na nossa região. Faça sua doação agora e ajude aqueles que 
								necessitam ajuda. Contamos com a doação de todos. Se cada um ajudar iremos vencer
								esse vírus. Doe para a Saúde.</p>
							<p><a href="doar.php" class="btn btn-primary" role="button">Faça sua doação</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
	.whatsapp-link {
		position: fixed;
		width: 60px;
		height: 60px;
		bottom: 40px;
		right: 40px;
		background-color: #25d366;
		color: #fff;
		border-radius: 50px;
		text-align: center;
		font-size: 30px;
		box-shadow: 1px 1px 2px #888;
		z-index: 1000;
	}

	.fa-whatsapp {
		margin-top: 16px;
	}
</style>
</head>

<body>
	<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5531999741540" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>

	<footer">
		<?php
		include("footer.php")
		?>
	</footer>

</body>


</html>