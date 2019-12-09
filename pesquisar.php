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
		<title>Buscar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		
		<link rel="icon" type="imagem/png" href="images/cafe.png">

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
				  <nav id="nav">
					  <a href="index.html">Home</a>		
					  <a href="sobre.html">Sobre</a>
					  <a href="escolha-lanchonete.php">Lanchonetes</a>
					  <a href="avaliar.html">Avaliar serviços
					  <a href="pesquisar.php">Buscar</a></a></section>
				  
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


					<form action="resultados.php" method="post">
					<div id="preco">
						<p><b>Quanto você está disposto a gastar ?</b></p>
						<input type="checkbox" name="preco" value="Menos de R$ 3,00"> Menos de R$ 3,00<br>
						<input type="checkbox" name="preco" value="R$ 3 - R$ 5"> R$ 3 - R$ 5<br>
						<input type="checkbox" name="preco" value="R$ 5 - R$ 7"> R$ 5 - R$ 7<br>
						<input type="checkbox" name="preco" value="R$ 7 - R$ 10"> R$ 7 - R$ 10<br>
						<input type="checkbox" name="preco" value="R$ 10 - R$ 15"> R$ 10 - R$ 15<br>
						<input type="checkbox" name="preco" value="R$ 15 - R$ 20"> R$ 15 - R$ 20<br>
					</div>
						<br><br>
						<p><b>Que tipo de lanche você deseja ?</b></p>
						<input type="checkbox" name="lanche" value="Salgados"> Salgados<br>
						<input type="checkbox" name="lanche" value="Bebidas"> Bebidas<br>
						<input type="checkbox" name="lanche" value="Doces"> Doces<br>
						<br><br> 

						<input type="submit" id="submit" value="Buscar" name="insert">
						
					</form>

					<img src="images/zoom.png" height="200px" width="200px" 
					style="position: absolute; 
					margin-top: -400px;
					margin-left: 520px; ">
					<img src="images/fast-food.png" height="110px" width="110px"
					style="position: absolute;
					margin-top: -380px;
					margin-left: 545px">




					
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