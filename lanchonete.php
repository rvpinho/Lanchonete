<?php

require_once 'control/database.php';
require_once 'control/usuario.php';

session_start();

$lanchonete = new usuario();
$search = $lanchonete->
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
					}
				</style>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Lanchonete</h2>
					</header>

					<!-- Intro -->
						<div class="row">
							<section class="6u 12u$(medium)">
								<h2>Informações sobre a lanchonete</h2>
								<p><strong>Nome:<br></strong>
									<strong>CNPJ:<br></strong>
								<strong>Localização:<br></strong>
								<strong>Telefone:<br></strong> 
								<strong>Horário de funcionamento:</strong></p>
							</section>
						</div>

					<hr class="major"/>

					<div class="row">
						<section class="6u 12u$(medium)">
							<h2>Produtos e Preços</h2>
							<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Código</th>
													<th>Descrição</th>
													<th>Preço</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Código item 1</td>
													<td>Descrição item 1</td>
													<td>Preço item 1</td>
												</tr>
												<tr>
													<td>Código item 2</td>
													<td>Descrição item 2</td>
													<td>Preço item 2</td>
												</tr>
												<tr>
													<td>Código item 3</td>
													<td>Descrição item 3</td>
													<td>Preço item 3</td>
												</tr>
												<tr>
													<td>Código item 4</td>
													<td>Descrição item 4</td>
													<td>Preço item 4</td>
												</tr>
												<tr>
													<td>Código item 5</td>
													<td>Descrição item 5</td>
													<td>Preço item 5</td>
												</tr>
											</tbody>
										</table>
									</div>
						</section>
					</div>

					<!-- Content -->
					

					<hr class="major" />

					
									<h3>DADOS ESTATÍSTICOS</h3>
									<p>
										<strong>Quantidade de clientes semanal:<br></strong>
										<strong>Consumo semanal:<br></strong>
										<strong>Venda semanal:<br></strong>
										<strong>Quanto um cliente está disposto a gastar:<br></strong>
										<strong>Lucro semanal (%) :<br></strong>
										<strong>Produto com maior demanda: <br></strong>
										<strong>Média de consumo: <br></strong>
										<strong>Média de clientes:</strong>

									</p>

									<h3>GRÁFICOS</h3>
									<canvas class="line-chart"></canvas>

									<hr class="major"/>

									<h3>RELAÇÃO COM OUTRAS LANCHONETES</h3>
									<p>
										<strong>Lucro:<br></strong>
										<strong>Consumo:<br></strong>
										<strong>Venda:<br></strong>
										<strong>Satisfação do cliente:<br></strong>
										<strong>Total consumido por lanche:<br></strong>

									</p>

									<hr class="major"/>

									<h3>AVALIAÇÃO DESTE SERVIÇO</h3>
									<p>
										<strong>Atendimento:<br></strong>
										<strong>Produtos:<br></strong>
										<strong>Espaço:<br></strong>
										<strong>Qualidade:<br></strong>
										<strong>Preço:<br></strong>

									</p>


									<hr class="major"/>

									<h3>COMPARATIVO ENTRE AS AVALIAÇÕES</h3>
									<p>
										<strong>Atendimento:<br></strong>
										<strong>Produtos:<br></strong>
										<strong>Espaço:<br></strong>
										<strong>Qualidade:<br></strong>
										<strong>Preço:<br></strong>

									</p>

									<hr class="major"/>

									<h3>AVALIAÇÃO GERAL</h3>
									<p>
										<h3>0.0</h3>

									</p>

									<h4>Comentários</h4>
									

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
			<script src="assets/js/Chart.bundle.min.js"></script>
			<script src="assets/js/Chart.min.js"></script>
			<script>
				var ctx = document.getElementsByClassName("line-chart");

				//Type, Data e Options
				var chartGraph = new Chart(ctx, {
					type: 'line',
					data: {
						labels: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
						datasets: [{
							label: "TAXA DE CLIQUES - 2017",
							data: [5,10,5,14,20,15,6,14,8,12,15,5,10],
							borderWidth: 6,
							borderColor: 'rgba(77,166,253,0.85)',
							backgroundcolor: 'transparent'
						},
						{ 	label: "TAXA DE CLIQUES - 2018",
						  	data: [9,14,11,6,5,4,3,8,11,10,13,18,6],
						  	borderWidth: 6,
						  	borderColor: 'rgba(6,204,6,0.85)',
						  	backgroundcolor: 'transparent',
						  },

						  ]
					},
					options: {
						title: {
							display: true,
							fontSize: 20,
							text: "RELATÓRIO DE CTR ANUAL"
						},
						labels: {
							fontStyle: "bold",
						}
					}
				})
			</script>

	</body>
</html>