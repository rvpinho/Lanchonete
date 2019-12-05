

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<!-- Header -->
			<header id="header">
				<div class="inner">
				  <nav id="nav">
					  <a href="../index.html">Home</a>
					  <a href="../pesquisar.html">Pesquisas</a>		
					  <a href="index.html">Área da Lanchonete</a></section>
				  
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			  </div>
			  <style>
			  	section#lanchonete {
			  		font-style: Arial;
			  		margin-right:1100px;
			  		margin-top: 100px;
			  	}
			  </style>
			</header>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				

				<div class="login100-more" style="background-image: url('images/producao-de-cafe.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>