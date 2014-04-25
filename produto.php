
<link rel="stylesheet" href="css/produto.css">
<body>	
	<?php
	$conexao = mysqli_connect ( "127.0.0.1", "root", "0811", "mirror" );
	$dados = mysqli_query ( $conexao, "SELECT * FROM produtos WHERE id = $_GET[id]" );
	$produto = mysqli_fetch_array ( $dados );
	
	$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
	$cabecalho_title = $produto ["nome"];
	include ("cabecalho.php");
	?>
	<div class="container">
		<div class="panel panel-primary ">
		
			<div class="panel-heading">Sua Compra</div>
			 <div class="produto">
			<br> <br>
				<h1><?= $produto["nome"]?></h1>
				<p>por apenas <?= $produto["preco"] ?></p>



				<form action="checkout.php" method="POST">
					<!-- <input type="hidden" name="nome" value="Fuzzy Cardigan">
				<input type="hidden" name="preco" value="R$ 129,00">-->
					<input type="hidden" name="id" value="<?= $produto["id"]?>">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>

						<input type="radio" name="cor" value="verde" id="verde" checked> <label
							for="verde"> <img
							src="img/produtos/foto<?= $produto["id"]?>-verde.png" alt="verde">
						</label> <input type="radio" name="cor" value="rosa" id="rosa"> <label
							for="rosa"> <img
							src="img/produtos/foto<?= $produto["id"]?>-rosa.png" alt="rosa">
						</label> <input type="radio" name="cor" value="azul" id="azul"> <label
							for="azul"> <img
							src="img/produtos/foto<?= $produto["id"]?>-azul.png" alt="azul">
						</label>

					</fieldset>


					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" min="36" max="46" value="42" step="2"
							name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>

					<input type="submit" class="comprar" value="Comprar">

					<!-- Link facebook 
				<div class="fb-like" data-href="http://mirrorfashion.net/loja"
					data-send="false" data-layout="box_count" data-width="58"
					data-show-faces="false"></div> -->

					<!-- Link Twitter -->
					<a href="https://twitter.com/share" class="twitter-share-button"
						data-count="vertical">Tweet</a>
					<!-- Link G+ -->
					<div class="g-plusone" data-annotation="inline" data-width="300"></div>

				</form>
			</div>

				<br> <br>
			
			<div class="panel panel-primary detalhes">
				<div class="panel-heading">Detalhes do Produto</div>

				<h2>Detalhes do produto</h2>

				<!-- <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
					material italiano com estampa desenhada pelos artesãos da
					comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
					mesmo pela nossa entrega a jato.</p>-->
				<p><?= $produto["descricao"] ?></p>
				</br>

				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e Poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div></div>
		
	<?php
	
	include ("rodape.php");
	?>
    <script src="js/jquery.js"></script>
	<script src="js/produto.js"></script>
	<!-- Script disponibilizado pelo facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Script disponibilizado pelo twitter -->
	<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
	js.src="http://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>


	<!-- Place this tag after the last +1 button tag. -->
	<script type="text/javascript">
 	 window.___gcfg = {lang: 'pt-BR'};

 	 (function() {
  	  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 	  po.src = 'https://apis.google.com/js/platform.js';
  	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
</body>
</html>

