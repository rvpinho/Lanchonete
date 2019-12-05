<?php
include 'control/database.php';
include 'control/pesquisa.php';

session_start();
$pesquisa = new pesquisa();

	if (isset($_GET['insert'])) {

	$pesquisa->setIdLanchonete(2);
	$pesquisa->setPreco($_GET['preco']);
	$pesquisa->setQualidade($_GET['qualidade']);
	$pesquisa->setOpcoes($_GET['opcoes']);
	$pesquisa->setAtendimento($_GET['atendimento']);
	$pesquisa->setDiferenciais($_GET['diferenciais']);
	$pesquisa->setEspaco($_GET['espaco']);
	$pesquisa->setConsumo($_GET['consumo']);
	$pesquisa->setGasto($_GET['gasto']);
	$pesquisa->setPrecoJusto($_GET['preco_justo']);
	$pesquisa->setLanche($_GET['lanche']);
	$pesquisa->setSatisfacao($_GET['satisfacao']);
	$pesquisa->setSobreSatisfacao($_GET['sobre_satisfacao']);
	$pesquisa->setAdicionais($_GET['adicionais']);
	$pesquisa->setLanche($_GET['sugestoes']);
	$pesquisa->setRecomendacao($_GET['recomendacao']);
	$pesquisa->setEmail($_GET['email']);

	if ($pesquisa->insert() == 1) {
		echo "Dados recebidos no banco de dados";
	} else {
		echo "Erro no banco de dados";
	}
}


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

				<style>
					p {
						font-family: cursive;
						color: #000;
						font-size: 16pt;
						}
				</style>

				<script>

					function validar() {
      					alert("Nós agradecemos por responder a nossa pesquisa!");
      					return true;
      				}
				</script>

				
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Miguelito</h2>
						<p>Avalie o serviço prestado pela Miguelito </p>
					</header>


					<!-- Avaliar Lamour Cafe -->
					<fieldset>
						<form action="Miguelito.php" method="get" id="inset_form">
							<h1> Avaliar Lanchonete</h1>
						<div id="avaliar-preco">
							<label><p>Preço</p></label><br>
							<input type="radio" id="p-ruim" name="preco" value="Ruim"> Ruim<br>
							<input type="radio" id="p-bom" name="preco" value="Bom"> Bom<br>
							<input type="radio" id="p-mbom" name="preco" value="Muito bom"> Muito bom<br>
							<input type="radio" id="p-otimo" name="preco" value="Ótimo"> Ótimo<br>
							<input type="radio" id="p-excelente" name="preco" value="Excelente"> Excelente<br>
						</div>
						<div id="avaliar-produto"><br>
							<label><p>Qualidade dos lanches</p></label><br>
							<input type="radio" id="prod-ruim" name="qualidade" value="Ruim"> Ruim <br>
							<input type="radio" id="prod-bom" name="qualidade" value="Bom"> Bom <br>
							<input type="radio" id="prod-mbom" name="qualidade" value="Muito bom"> Muito bom <br>
							<input type="radio" id="prod-otimo" name="qualidade" value="Ótimo"> Ótimo <br>
							<input type="radio" id="prod-excelente" name="qualidade" value="Excelente"> Excelente <br>
						</div>
						<div id="avaliar-produto"><br>
							<label><p>Diversidade de opções para lanchar</p></label><br>
							<input type="radio" id="prod-ruim" name="opcoes" value="Ruim"> Ruim <br>
							<input type="radio" id="prod-bom" name="opcoes" value="Bom"> Bom <br>
							<input type="radio" id="prod-mbom" name="opcoes" value="Muito bom"> Muito bom <br>
							<input type="radio" id="prod-otimo" name="opcoes" value="Ótimo"> Ótimo <br>
							<input type="radio" id="prod-excelente" name="opcoes" value="Excelente"> Excelente <br>
						</div>
						<div id="avaliar-atendimento"><br>
							<label><p>Atendimento</p></label><br>
							<input type="radio" id="att-ruim" name="atendimento" value="Ruim"> Ruim<br>
							<input type="radio" id="att-bom" name="atendimento" value="Bom"> Bom<br>
							<input type="radio" id="att-mbom" name="atendimento" value="Muito bom"> Muito bom<br>
							<input type="radio" id="att-otimo" name="atendimento"  value="Ótimo"> Ótimo<br>
							<input type="radio" id="att-excelente" name="atendimento" value="Excelente"> Excelente<br>
						</div>
						<div id="avaliar-diferencial"><br>
							<label><p>Diferenciais</p></label><br>
							<input type="radio" id="dff-ruim" name="diferenciais" value="Ruim"> Ruim<br>
							<input type="radio" id="dff-bom" name="diferenciais" value="Bom"> Bom<br>
							<input type="radio" id="dff-mbom" name="diferenciais" value="Muito bom"> Muito Bom<br>
							<input type="radio" id="dff-otimo" name="diferenciais" value="Ótimo"> Ótimo<br>
							<input type="radio" id="dff-excelente" name="diferenciais" value="Excelente"> Excelente<br>
						</div>
						<div id="avaliar-espaco"><br>
							<label><p>Espaço</p></label><br>
							<input type="radio" id="espaco-ruim" name="espaco" value="Ruim"> Ruim<br>
							<input type="radio" id="espaco-bom" name="espaco" value="Bom"> Bom<br>
							<input type="radio" id="espaco-mbom" name="espaco" value="Muito Bom"> Muito Bom<br>
							<input type="radio" id="espaco-otimo" name="espaco" value="Ótimo"> Ótimo<br>
							<input type="radio" id="espaco-excelente" name="espaco" value="Excelente"> Excelente<br>
						</div><br>
						<h1>Sobre o seu consumo responda</h1>
						<div id="consumo"><br>
							<label><p>O que você mais consome ?</p></label><br>
							<input type="radio" id="consumo-alimento" name="consumo" value="Salgados"> Salgados <br>
							<input type="radio" id="consumo-alimento" name="consumo" value="Bebidas"> Bebidas <br>
							<input type="radio" id="consumo-alimento" name="consumo" value="Doces"> Doces <br>
						</div><br>
						<div id="preco-pago">
							<label><p>Qual o seu gasto médio com lanches por semana (R$) ?</p></label><br>
							<input type="text" id="gasto" name="gasto"><br>
						</div><br>
						<div id="preco-justo">
							<label><p>Você considera justo o preço que você paga pelo<br> consumo de algum salgado ou bebida na lanchonete ?</p></label><br>
							<input type="radio"  name="preco_justo" id="preco_justo" value="Sim" > Sim<br>
							<input type="radio"  name="preco_justo" id="preco_justo" value="Não" > Não<br>
						</div><br>
						<div id="preco-justo-lanche"><br>
							<label><p>Qual lanche não tem um preço justo de acordo com o consumo ?</p></label><br>
							<input type="text" name="lanche" id="lanche"><br>
						</div><br>
						<div id="satisfacao-lanche">
							<label><p>Você fica satisfeito com o lanche oferecido ?</p></label><br>
							<input type="radio" name="satisfacao" id="satisfacao" value="Sim"> Sim <br>
							<input type="radio" name="satisfacao" id="satisfacao" value="Não"> Não <br>
						</div><br>
						<div id="sobre-satisfacao">
							<label><p>Qual lanche não te satisfaz ?</p></label><br>
							<input type="text" name="sobre_satisfacao" id="sobre-satisfacao"><br>
						</div><br>
						<div id="outros-servicos">
							<label><p>A lanchonete oferece serviços adicionais, além dos lanches ?</p></label><br>
							<input type="radio" name="adicionais" value="Sim"> Sim <br>
							<input type="radio" name="adicionais" value="Não"> Não <br>
						</div><br>
						<h1>Recomendações</h1>
						<div id="mensagem"><br>
							<label id="sugestoes"><p>Reclamações/Sugestões:</p></label><br>
							<textarea rows="6" cols="3" id="sugestoes" name="sugestoes"></textarea>
						</form>
						<div id="nota"><br>
							<label><p>O quanto você recomendaria este serviço a um amigo ?</p></label><br>
							<input type="radio" id="av-1" name="recomendacao" value="1"> 1 <br>
							<input type="radio" id="av-2" name="recomendacao" value="1"> 2 <br>
							<input type="radio" id="av-3" name="recomendacao" value="1"> 3 <br>
							<input type="radio" id="av-4" name="recomendacao" value="1"> 4 <br>
							<input type="radio" id="av-5" name="recomendacao" value="1"> 5 <br>
						</div><br>
						<h1>Identificação</h1>
						<div id="email"><br>
							<label><p>Informe o seu e-mail para enviar</p></label><br>
							<input type="text" name="email" id="email"><br>
						</div><br>
						<div id="botao-enviar">
						<input type="submit" name="insert" value="Enviar" onclick="validar()">
					</div>

					</fieldset>
					
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