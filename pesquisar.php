<?php
include "control/filtros.php";
session_start();

/*$pesquisa->setPreco($_GET['preco']);
$pesquisa->setProduto($_GET['produto']);
$pesquisa->setQualidade($_GET['qualidade']);
$pesquisa->setAtendimento($_GET['atendimento']);*/

?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BUSCA LANCHES</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					
					<nav id="nav">
						<a href="index.html">Página Inicial</a>
						<a href="generic.html">Pesquisas</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>

				
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Pesquisar</h2>
						<p>Buscar por melhor produto ou serviço </p>
					</header>


					<form action="resultados.php" method="get">
						<p><b>Quanto você está disposto a gastar ?</b></p>
						<select name="preco" id="preco"	>
							<option value="1-2" name="preco">R$ 1.00 - R$ 2.50</option>
							<option value="2-5" name="preco">R$ 2.50 - R$ 5.00</option>
							<option value="5-7" name="preco">R$ 5.00 - 7.50</option>
							<option value="7-10" name="preco">R$ 7.50 - 10.00</option>
							<option value="ac10" name="preco">Acima de R$ 10.00</option>



						</select>
						<br><br>
						<p><b>Que tipo de lanche você deseja ?</b></p>
						<select name="lanche" id="lanche">
							<option value="salgados">Salgados</option>
							<option value="bebidas">Bebidas</option>
							<option value="doces">Doces</option>
							<option value="refeicoes">Refeições</option>
							<option value="servicos">Serviços</option>
						</select>
						<br><br>
						<p><b>Quanto tempo você pode esperar ?</b></p>
						<select name="tempo" id="tempo">
							<option value="ruim">Menos de 1 minuto</option>
							<option value="bom">Menos de 3 minutos</option>
							<option value="muitobom">Mais de 5 minutos</option>
						</select>
						<br><br>
						<p><b>Você deseja comer no local ?</b></p>
						<select name="local" id="local">
							<option value ="ruim-at">Sim</option>
							<option value="bom-at">Não</option>
						</select>
						<br><br>
						<input type="submit" id="submit" value="Buscar" name="insert">
						
					</form>




					
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					

					

					<div class="copyright">
						&copy;LANCHES: Busca 
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>