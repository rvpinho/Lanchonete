<?php
include "control/filtros.php";
session_start();
$filtro = new filtros();
?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Busca LANCHES</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Resultados</h2>
					</header>

					<!-- Intro -->
						<div class="row">
							<section class="6u 12u$(medium)">
								<h2>Lanchonete Recomendada</h2>
								<img src="images/Lamur Cafe.png" height="200px"><br>
								<br><h2>Avaliação:<i> <b>4.7</b></i></h2>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Sobre a lanchonete</h3>
								<b>Gasto médio: </b> <i>R$ 4,00 à 10,00 reais</i><br>
								<b>Tipo de lanche: </b><i> Salgados </i><br>
								<b>Tempo de espera: </b><i> Até 5 minutos</i><br>
								
							</section>
						</div>

					<hr class="major" />


								<!-- Table -->
									<h3>TABELA DE PREÇOS</h3>


									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Descrição</th>
													<th>Preço</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Achocolatado 200ml</td>
													<td>2.50</td>
												</tr>
												<tr>
													<td>Café com Chantilly</td>
													<td>1.50</td>
												</tr>
												<tr>
													<td>Café com leite 200ml</td>
													<td>2.50</td>
												</tr>
												<tr>
													<td>Café grande 140ml</td>
													<td>1.00</td>
												</tr>
												<tr>
													<td>Café pequeno 80ml:</td>
													<td>0.50</td>
												</tr>
												<tr>
													<td>Cappuccino 200ml:</td>
													<td>4.00</td>
												</tr>

												<tr>
													<td>Cappuccino 200ml:</td>
													<td>2.00</td>
												</tr>
												<tr>
													<td>Chá 150 ml</td>
													<td>2.00</td>
												</tr>
												<tr>
													<td> Leite com Nescau 250 ml </td>
													<td>3.00</td>
												</tr>
												<tr>
													<td> Leite quente 200 ml </td>
													<td>2.00</td>
												</tr>
												<tr>
													<td> Pingado 150 ml</td>
													<td>1.00</td>
												</tr>
												<tr>
													<td> Refrigerante 350 ml </td>
													<td>3.50</td>
												</tr>
												<tr>
													<td> Suco lata 350 ml </td>
													<td>3.90</td>
												</tr>
												<tr>
													<td> Suco natural de limão 300ml </td>
													<td>3.00</td>
												</tr>
												<tr>
													<td>Suco natural de laranja 300ml</td>
													<td>4.00</td>
												</tr>
												<tr>
													<td>Bolo de pote</td>
													<td>6.00</td>
												</tr>
												<tr>
													<td>Coxinha</td>
													<td>3.50</td>
												</tr>
												<tr>
													<td>Croquete de Pizza</td>
													<td>3.50</td>
												</tr>
												<tr>
													<td>Empada</td>
													<td>4.50</td>
												</tr>
												<tr>
													<td>Espetinho de Frango</td>
													<td>4.00</td>
												</tr>
												<tr>
													<td>Kibe</td>
													<td>3.50</td>
												</tr>
												<tr>
													<td>Misto Quente</td>
													<td>3.50</td>
												</tr>
												<tr>
													<td>Pão de Queijo</td>
													<td>3.00</td>
												</tr>
												<tr>
													<td>Pastel de carne/frango</td>
													<td>3.50</td>
												</tr>
												<tr>
													<td>Pudim</td>
													<td>2.00</td>
												</tr>
												<tr>
													<td>Sanduíche natural</td>
													<td>3.50</td>
												</tr>

												<tr>
													<td>Bolo caseiro</td>
													<td>3.50</td>
												</tr>

												<tr>
													<td>Pizza brotinho</td>
													<td>8.00</td>
												</tr>

												<tr>
													<td>Pizza grande</td>
													<td>10.00</td>
												</tr>

												<tr>
													<td>Pizza Mini</td>
													<td>5.50</td>
												</tr>
											</tbody>

										</table>
						
					<hr class="major" />

									</div>
									

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