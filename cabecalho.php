<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width">
<title> <?php print $cabecalho_title; ?> </title>

<!--  <link rel="stylesheet" href="css/reset.css">
<!-- <link rel="stylesheet" href="css/estilos.css">-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
</head>
<body>
	<?php print @$cabecalho_css; ?>
	<nav class="navbar navbar-default  navbar-static-top">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php"> Mirror Fashion</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse"
			data-target="#navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
			<span class="icon-bar"></span> <span class="icon-bar"></span>
		</button>
	</div>

	<ul class="nav navbar-nav collapse navbar-collapse"
		id="navbar-collapse-1">
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>
				Home</a></li>
		<li><a href="sobre.php"><span class="glyphicon glyphicon-info-sign"></span>
				Sobre</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sua
				Conta</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>
				Perguntas frequentes</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>
				Entre em contato</a></li>
	</ul>
	</nav>

</body>
</html>
<?php
