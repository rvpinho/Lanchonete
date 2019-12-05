<?php
include "control/pesquisa.php";
session_start();
//$pesquisa = new pesquisa();

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

		<style>
			.lanchonetes {
				font-size: 22pt;
			}

			p {
				color: #fff;
			}
		</style>
	</head>
	<body class="subpage">

		
		<!-- Header -->
			<header id="header">
				<div class="inner">
				  <nav id="nav">
					  <a href="index.html">Home</a>		
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
						<h1>Lanchonete</h1>
						<br><br>
						<div class="lanchonetes">
							<a href="lanchonete.html"><p> Lamur Café </p></a>
							<a href="lanchonete-mada.html"><p> Madá </p></a>
							<a href="lanchonete-miguelito.html"><p> Miguelito </p></a>
						</div>
						
					</header>


					



					
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