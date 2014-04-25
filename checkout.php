<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Checkout Mirror Fashion</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/estilos.css">
<!--  <link rel="stylesheet" href="css/bootstrap-flatly.css">-->
</head>
<body>
<?php
$conexao = mysqli_connect ( "127.0.0.1", "root", "0811", "mirror" );
$dados = mysqli_query ( $conexao, "SELECT * FROM produtos WHERE id = $_POST[id]" );
$produto = mysqli_fetch_array ( $dados );

?>
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


	<div class="jumbotron">
		<div class="container">

			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para
				efetivar a compra.</p>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<h2>Sua compra</h2>
					<img
						src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png"
						class="img-thumbnail img-responsive">

					<!-- <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
						class="img-thumbnail img-responsive">-->
					<dl>
						<dt>Produto</dt>
						<dd><?= $produto["nome"]?></dd>
						<dt>Preço</dt>
						<dd><?= $produto["preco"] ?></dd>
						<dt>Cor</dt>
						<dd><?= $_POST["cor"] ?></dd>
						<dt>Tamanho</dt>
						<dd><?= $_POST["tamanho"] ?></dd>
					</dl>
				</div>
			</div>

			<div class="panel-heading">
				<form class="col-sm-8">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados Pessoais</legend>
							<div class="form-group">
								<label for="nome">Nome Completo</label> <input type="text"
									class="form-control" id="nome" name="nome" autofocus required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">@</span> <input type="email"
									class="form-control" id="email" name="email"
									placeholder="email@exemplo.com">
							</div>
							<div class="form-group">
								<label for="cpf">CPF</label> <input type="text"
									class="form-control" id="cpg" name="cpf"
									placeholder="000.000.000-00" data-mask="999.999.999-99"
									required>
							</div>

							<div class="checkbox">
								<label> <input type="checkbox" value="sim" name="spam" checked>
									Quero Receber Spam da Mirror Fashion
								</label>
							</div>

						</fieldset>

						<fieldset class="col-md-6">
							<legend>Cartão de Crédito</legend>

							<div class="form-group">
								<label for="numero-cartao"> Número - CVV</label> <input
									type="text" class="form-control" id="numero-cartao"
									name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
							</div>
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label> <select
									name="bandeira-cartao" id="bandeira-cartao"
									class="form-control">
									<option value="master">MasterCard</option>
									<option value="vida">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div>
							<div class="form-group">
								<label for="validade-cartao">Validade</label> <input
									type="month" class="form-control" id="validade-cartao"
									name="validade-cartao">
							</div>
						</fieldset>
					</div>
					<!-- <button type="submit" class="pull-right" class="btn-lg"
								class="btn btn-primary">
								<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar
								Pedido
							</button> -->
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar
						Pedido
					</button>
				</form>


			</div>
		</div>
	</div>


	<script src=js/jquery.js></script>
	<script src="js/inputmask-plugin.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/ckeckout.js"></script>


	<nav class="navbar navbar-inverse   navbar-static-bottom">
	<div class="navbar-header">
		<img alt="Logo Mirror Fashion" src="img/logo-rodape.png">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
			data-target="#navbar-collapse-2">
			<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
			<span class="icon-bar"></span> <span class="icon-bar"></span>
		</button>
	</div>
	<ul class="nav navbar-nav collapse navbar-collapse social"
		id="navbar-collapse-2">
		<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
		<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
		<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
	</ul>
	</nav>
</body>
</html>
<?php
