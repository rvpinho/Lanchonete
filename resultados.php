<?php

	$preco = $_POST['preco'];
	$lanche = $_POST['lanche'];
?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Resultados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link rel="icon" type="imagem/png" href="images/cafe.png">
		<style >
			div#pao-de-queijo {
				margin-top: 0px;

			}

			div#coxinha {
				margin-top: -250px;
				margin-left: 200px;
			}

			div#kibe {
				margin-top: -250px;
				margin-left: 400px;
			}

			div#misto-quente {
				margin-top: -250px;
				margin-left: 600px;
			}

			div#pastel {
				margin-top: -250px;
				margin-left: 800px;
			}

			div#croquete {
				margin-top: 100px;
				margin-left: 0px;
			}

			div#empada {
				margin-top: -250px;
				margin-left: 600px;
			}

			div#espetinho {
				margin-top: -260px;
				margin-left: 400px;
			}

			div#sanduiche {
				margin-top: -250px;
				margin-left: 200px;
			}

			div#tropeiro {
				margin-top: -250px;
				margin-left: 800px;

			}

			div#grande {
				margin-top: -250px;
				margin-left: 200px;
			}

			div#cafe {
				margin-top: -210px;
				margin-left: 200px;

			}

			div#cafe-pequeno {

			}

			div#pingado {
				margin-top: -210px;
				margin-left: 400px;

			}

			div#leite-quente {
				margin-top: -210px;
				margin-left: 600px;

			}

			div#cappuccino {
				margin-top: -210px;
				margin-left: 1000px;


			}

			div#cha {
				margin-top: -210px;
				margin-left: 800px;

			}

			div#leite-nescau {
				margin-top: 0px;

			}

			div#suco-limao {
				margin-top: -258px;
				margin-left: 200px;

			}

			div#refrigerante-300ml {
				margin-top: -258px;
				margin-left: 400px;

			}

			div#suco-polpa-300 {
				margin-top: -258px;
				margin-left: 600px;

			}

			div#suco-lata-350 {
				margin-top: -258px;
				margin-left: 800px;

			}

			div#suco-laranja-300 {
				margin-top: -258px;
				margin-left: 1000px;

			}

			div#pudim {

			}

			div#bolo-caseiro {

			}

			div#bolo-pote {

			}

			div#pao-de-queijo-cafe {

			}

			div#caldo-de-mandioca {

			}

			div#pastel-assado-suco {
				margin-top: -280px;
				margin-left: 200px;

			}

			div#empada-suco {
				margin-top: -280px;
				margin-left: 600px;

			}

			div#coxinha-suco {
				margin-top: -280px;
				margin-left: 896px;

			}

			div#suco-salgado {
				margin-top: 0px;

			}

			div#suco-pasteis {
				margin-top: -284px;
				margin-left: 400px;

			}

			div#suco-cachorro {
				 margin-top: -284px;
				 margin-left: 800px;

			}

			div#suco-espaguete {
				margin-top: 0px;

			}

			div#hamburguer-assado {
				margin-top: -282px;
				margin-left: 400px;

			}

			div#hamburguer-trad {
				margin-top: -282px;
				margin-left: 640px;

			}

			div#pao-pernil {
				margin-top: -282px;
				margin-left: 840px;

			}

			div#xburguer {

			}

			div#hamburguer-lata {

			}

			div#xbacon {
				margin-top: -282px;
				margin-left: 400px;

			}

			div#xburguer-lata {
				margin-top: -282px;
				margin-left: 640px;

			}

			div#pao-pernil-lata {

			}

			div#pao-pernil-especial {
				margin-top: -282px;
				margin-left: 400px;

			}

			div#xbacon-lata {
				margin-top: -282px;
				margin-left: 640px;

			}

			div#pernil-esp-lata {

			}

			div#Refresco {

			}

			div#Suco-polpa-agua {
				margin-top: 0px;
				margin-left: 0px;

			}

			div#Suco-polpa-leite {
				margin-top: -256px;
				margin-left: 200px;

			}

		</style>
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Resultados</h2>
						<?php
							echo '<h1> <b>Exibindo ' .$lanche. ' na faixa de: ' .$preco. '</h1></b>';
						 ?>
					</header>

					<!-- Intro -->
						<div>
								<center><h2>L'Amour Café</h2></center><br>
								<center><img src="images/Lamur Cafe.png" height="200px"></center><br>
								<h2> Lanches Recomendados</h2>
								<?php 
									if ($lanche == 'Salgados') //Se lanche é salgado 
									{
										if ($preco == 'R$ 3 - R$ 5' ) { 
											echo 	'
													<div id="pao-de-queijo">
													 <li><b>Pão de Queijo<b></li>
													 <img src="images/pao-de-queijo.png" height="150" width="150">
													 <br><h2>R$ 3,00</h2>
													 </div>


													 <div id="coxinha">
													 <li> <b>Coxinha</b></li>
													 <img src="images/coxinha.png" height="150" width="150"><br><h2>R$ 3,50</h2>
													 </div>

													 <div id="kibe">

													 <li>Kibe</li>
													 <img src="images/kibe.png" height="150" width="150"><br><h2>R$ 3,50</h2>

													 </div>

													 <div id="misto-quente">

													 <li>Misto quente</li>
													 <img src="images/misto-quente.png" height="150" width="150"><br><h2>R$ 3,50</h2>

													 </div>
													 
													 <div id="pastel">
													 <li>Pastel de carne/Frango</li><img src="images/pastel.png" height="150" width="150"><br><h2>R$ 3,50</h2>
													 </div>
													 
													 <div id="croquete">
	 												 <li>Croquete de Pizza</li>
	 												 <img src="images/croquete.png" height="150" width="150"><br><h2>R$ 3,50</h2>
													 </div>

													 <div id="empada">
													 <li>Empada</li>
													 <img src="images/empada.png" height="120" width="120"><br><h2><br>R$ 4,50</h2>
													 </div>

													 <div id="espetinho">
													 <li>Espetinho de frango</li>
													 <img src="images/espetinho.png" height="150" width="150"><br><h2>R$ 3,50</h2>
													 </div>

													 <div id="sanduiche">

	 												<li>Sanduiche Natural</li>
	 												<img src="images/sanduiche.png" height="150"
	 												width="150"><br><h2>R$ 3,50 </h2>

													 </div>


													 <div id="tropeiro">

	 												<li>Feijão Tropeiro</li>
	 												<img src="images/troeiro.gif" height="150"
	 												width="150"><br><h2>R$ 5,00 </h2>

													 </div>

													 ';

										}
										else if ($preco == 'R$ 5 - R$ 7') { 
											echo '<li>Mini Pizza</li>
												 <img src="images/minipizza.png" height="150"
												 width="150"><br><h2>R$ 5,50</h2>';

										} else if ($preco == 'R$ 7 - R$ 10') {
											echo 

											'<div id="brotinho">
											<li> Pizza Brotinho</li>
												 <img src="images/brotinho.png"
												 height="150" width="150"><br><h2>R$ 8,00</h2>
											</div>

											<div id="grande">
												 
													 <li> Pizza Grande</li>
												 <img src="images/pizza-grande.png"
												 height="150" width="150"><br><h2>R$ 10,00</h2>

											</div>';


										} else if ($preco == 'R$ 10 - R$ 15') {

										} else if ($preco == 'R$ 15 - R$ 20') {

										}
									} else if ($lanche == 'Bebidas') {
										if ($preco == 'Menos de R$ 3,00') {
											echo '

											<div id="cafe-pequeno">
											<li>Café pequeno 80ml</li>
											<img src="images/copo-de-café-png-3.png" height="100" width="100"><br>
											<h2> R$ 0,50</h2>
											</div>


											<div id="cafe">
											<li>Café 100ml</li>
											<img src="images/cafe-peq.png" height="100" width="100"><br>
											<h2> R$ 1,00</h2>
											</div>



											<div id="pingado">
											<li>Pingado 150ml</li>
											<img src="images/pingado.png" height="100" width="100"><br>
											<h2> R$ 1,00</h2>
											</div>

											<div id="leite-quente">
											<li>Leite Quente 200ml</li>
											<img src="images/copo-de-leite.png" height="100" width="120"><br>
											<h2> R$ 2,00</h2>
											</div>

											<div id="cha">
											<li>Chá 150 ml</li>
											<img src="images/cha.png" height="100" width="100"><br>
											<h2> R$ 2,00</h2>
											</div>

											<div id="cappuccino">
											<li>Cappuccino 200ml</li>
											<img src="images/cappuccino.png" height="100" width="100"><br>
											<h2> R$ 2,50</h2>
											</div>';

										} else if ($preco == 'R$ 3 - R$ 5' ) { 

											echo '
											<div id="leite-nescau">
											<li>Leite com Nescau</li>
											<img src="images/leite-nescau.gif" height="150" width="80"><br>
											<h2> R$ 3,00 </h2>
											</div>



											<div id="suco-limao">
											<li>Suco de Limão 300ml</li>
											<img src="images/suco-de-limão.png" height="150" width="120"><br>
											<h2> R$ 3,00 </h2>
											</div>

											<div id="refrigerante-300ml">
											<li>Refrigerante 300ml</li>
											<img src="images/refri-latas.png" height="150" width="150"><br>
											<h2> R$ 3,50 </h2>
											</div>


											<div id="suco-polpa-300">
											<li>Suco de Polpa 300ml</li>
											<img src="images/suco-polpa.png" height="150" width="150"><br>
											<h2> R$ 3,50 </h2>
											</div>


											<div id="suco-lata-350">
											<li>Suco de lata 350ml</li>
											<img src="images/suco-lata.png" height="150" width="150"><br>
											<h2> R$ 3,90 </h2>
											</div>


											<div id="suco-laranja-300">
											<li>Suco de Laranja 300 ml</li>
											<img src="images/suco-laranja.png" height="150" width="170"><br>
											<h2> R$ 4,00 </h2>
											</div>';


										}
										else if ($preco == 'R$ 5 - R$ 7') { 

										} else if ($preco == 'R$ 7 - R$ 10') {

										} else if ($preco == 'R$ 10 - R$ 15') {

										} else if ($preco == 'R$ 15 - R$ 20') {

										}

									} else if ($lanche == 'Doces') {
										if ($preco == 'Menos de R$ 3,00')
										{
											echo '
											<div id="pudim">
											<li>Pudim </li>
											<img src="images/pudim.png" height="150" width="150"><br>
											<h2>R$ 2,00</h2>
											<br>

											</div>';
										}
										else if ($preco == 'R$ 3 - R$ 5' ) {
										 
											echo '
											<div id="bolo-caseiro">
											<li> Bolo Caseiro </li>
											<img src="images/bolo-caseiro.png" height="150"
											width="150"><br>
											<h2>R$ 3,50</h2><br>

											</div>';
										}
										else if ($preco == 'R$ 5 - R$ 7') {
										echo '
										<div id="bolo-pote">
										<li> Bolo de Pote </li>
										<img src="images/bolo-pote.jpg" height="150" width="150"><br>
										<h2>R$ 6,00</h2><br>

										</div>';
										
										} else if ($preco == 'R$ 7 - R$ 10') {

										} else if ($preco == 'R$ 10 - R$ 15') {

										} else if ($preco == 'R$ 15 - R$ 20') {

										}

									}
								?>
								
						</div>

					<hr class="major" />
					<div>
								<center><h2>Miguelito</h2></center><br>
								<center><img src="images/Miguelito.png" height="200px"></center><br>
								<h2> Lanches Recomendados</h2>
								<?php

								if ($lanche == 'Salgados')
								{
									if ($preco == 'Menos de R$ 3,00')
									{

									}
									else if ($preco == 'R$ 3 - R$ 5')
									{
										echo '
										<div id="pao-de-queijo-cafe">
										<li>Pão de Queijo + Café</li>
										<img src="images/pao-de-queijo.png" height="150" width="150">
										<img src="images/cafe-peq.png" height="150" width="150">
										<br><h2> R$ 3,30 </h2><br>
										</div>



										';

									}
									else if ($preco == 'R$ 5 - R$ 7')
									{

										echo '
										<div id="caldo-mandioca">
										<li>Caldo de Mandioca</li>
										<img src="images/caldo.png" height="150" width="150"><br>
										<h2>R$ 5,00</h2><br>
										</div>



										<div id="pastel-assado-suco">
										<li>Pastel Assado + Suco 200ml</li>
										<img src="images/pastel-assado.png" height="150" width="150">
										<img src="images/suco.png" height="150" width="150"><br>
										<h2>R$ 5,60</h2><br>
										</div>


										<div id="empada-suco">
										<li>Empada + Suco 200ml</li>
										<img src="images/empada.png" height="100" width="100">
										<img src="images/suco.png" height="150" width="150"><br>
										<h2>R$ 5,60</h2><br>
										</div>


										<div id="coxinha-suco">
										<li>Coxinha + Suco 200ml</li>
										<img src="images/coxinha.png" height="150" width="150">
										<img src="images/suco.png" height="150" width="150"><br>
										<h2>R$ 5,60</h2><br>
										</div>


										<div id="suco-salgado">
										<li>Suco de 200ml + Salgado</li>
										<img src="images/suco.png" height="150" width="150">
										<img src="images/salgado.png" height="150" width="150"><br>
										<h2>R$ 5,60</h2><br>
										</div>


										<div id="suco-pasteis">
										<li>Suco de 200ml + 2 Pastéis Comuns</li>
										<img src="images/suco.png" height="150" width="150">
										<img src="images/pastel.png" height="150" width="150"><br>
										<h2>R$ 6,00</h2><br>
										</div>


										<div id="suco-cachorro">
										<li>Suco de 200ml + Cachorro-Quente</li>
										<img src="images/suco.png" height="150" width="150">
										<img src="images/cachorro-quente.png" height="150" width="150"><br>
										<h2>R$ 6,80</h2><br>
										</div>




										';

									}
									else if ($preco == 'R$ 7 - R$ 10')
									{
										echo '

										<div id="suco-espaguete">
										<li>Suco de 300 ml + Espaguete </li>
										<img src="images/suco.png" height="150" width="150">
										<img src="images/espaguete.png" height="150" width="150">
										<br>
										<h2>R$ 7,20 </h2><br>
										</div>

										<div id="hamburguer-assado">
										<li>Hamburguer Assado </li>
										<img src="images/hamb-assado.png" height="150" width="150">
										<br>
										<h2>R$ 8,30 </h2><br>
										</div>

										<div id="hamburguer-trad">
										<li>Hamburguer Trad</li>
										<img src="images/hamburguer.png" height="150" width="150">
										<br>
										<h2>R$ 8,50 </h2><br>
										</div>


										<div id="pao-pernil">
										<li>Pão Simples com Pernil</li>
										<img src="images/pao-pernil.png" height="150" width="150">
										<br>
										<h2>R$ 9,50 </h2><br>
										</div>


										<div id="xburguer">
										<li>X-Burguer</li>
										<img src="images/xburguer.png" height="150" width="150">
										<br>
										<h2>R$ 9,80 </h2><br>
										</div>'

										;

									}
									else if ($preco == 'R$ 10 - R$ 15')
									{
										echo '

										<div id="hamburguer-lata">
										<li>Hamburguer Trad + Lata</li>
										<img src="images/hamburguer.jpg" height="150" width="150">
										<img src="images/lata-refri.png" height="150" width="150">
										<br>
										<h2>R$ 10,50 </h2><br>
										</div>
										


										<div id="xbacon">
										<li>X-Bacon</li>
										<img src="images/xbacon.jpg" height="150" width="150">
										<br>
										<h2>R$ 10,90 </h2><br>
										</div>


										<div id="xburguer-lata">
										<li>X-Burguer + Lata</li>
										<img src="images/xburguer.png" height="150" width="150">
										<img src="images/lata-refri.png" height="150" width="150">
										<br>
										<h2>R$ 11,25 </h2><br>
										</div>


										<div id="pao-pernil-lata">
										<li>Pão com pernil simples + Lata</li>
										<img src="images/pao-pernil.png" height="150" width="150">
										<img src="images/lata-refri.png" height="150" width="150">
										<br>
										<h2>R$ 12,00 </h2><br>
										</div>


										<div id="pao-pernil-especial">
										<li>Pão com pernil especial</li>
										<img src="images/pao-pernil.png" height="150" width="150">
										<br>
										<h2>R$ 12,50 </h2><br>
										</div>

										<div id="xbacon-lata">
										<li>X-Bacon + Lata</li>
										<img src="images/xbacon.jpg" height="150" width="150">
										<img src="images/lata-refri.png" height="150" width="150">
										<br>
										<h2>R$ 12,80 </h2><br>
										</div>
										


										<div id="pernil-esp-lata">
										<li>Pão com Pernil Especial + Lata</li>
										<img src="images/pernil.png" height="100" width="150">
										<img src="images/lata-refri.png" height="150" width="150">
										<br>
										<h2>R$ 14,00 </h2><br>
										</div>'

										;

									}
									else if ($preco == 'R$ 15 - R$ 20')
									{

									}

								} 
								else if ($lanche == 'Bebidas')
								{
									if ($preco == 'Menos de R$ 3,00')
									{
										echo '
										<div id="Refresco">
										<li>Refresco (copo de 200ml)</li>
										<img src="images/suco-polpa.png" height="150"
										width="150"><br>
										<h2>R$ 2,00</h2><br>
										</div>';

									}
									else if ($preco == 'R$ 3 - R$ 5')
									{
										echo '
										<div id="Suco-polpa-agua">
										<li>Suco de Polpa (Água)</li>
										<img src="images/suco-de-limão.png" height="150" width="120"><br>
										<h2> R$ 3,50 </h2>
										
										</div>




										<div id="Suco-polpa-leite">
										<li>Suco de Polpa (Leite)</li>
										<img src="images/suco-leite.png" height="150" width="150"><br>
										<h2> R$ 4,00 </h2>
										
										</div>
										'


										;

									}
									else if ($preco == 'R$ 5 - R$ 7')
									{

									}
									else if ($preco == 'R$ 7 - R$ 10')
									{

									}
									else if ($preco == 'R$ 10 - R$ 15')
									{

									}
									else if ($preco == 'R$ 15 - R$ 20')
									{
										
									}

								}
								else if ($lanche == 'Doces')
								{
									if ($preco == 'Menos de R$ 3,00')
									{

									}
									else if ($preco == 'R$ 3 - R$ 5')
									{

									}
									else if ($preco == 'R$ 5 - R$ 7')
									{

									}
									else if ($preco == 'R$ 7 - R$ 10')
									{

									}
									else if ($preco == 'R$ 10 - R$ 15')
									{

									}
									else if ($preco == 'R$ 15 - R$ 20')
									{
										
									}

								}

								?>
							</div>

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