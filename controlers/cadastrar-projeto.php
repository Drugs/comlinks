<?php 
ob_start();
require('../assets/config.php');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />	
	<head>
		<title>PROPP2</title>
		<!-- Bootstrap -->
		<link href="../assets/css/bootstrap1.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="../assets/js/modernizr.custom.js"></script>
		<!-- HTML5 shim e Respond.js para suporte de HTML5 e media queries no IE8 -->
		<!-- AVISO: Respond.js não funciona se você acessar a página via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
		span.dark {
			font-weight: 700;
		}
		</style>
	</head>
	<body>
	<?php
	#include('menu-noticias.php');
	?>
	<!-- GERENCIAR PROJETO-->
	<div id="mensagem" class="container" style="padding-top: 60px;">
		<div class="row">
		<h3 class="text-center">Cadastrar Projeto</h3><br>
		<div class="row col-xs-12 col-sm-12 col-md-8 col-md-push-2">
			<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="../models/projeto-model">
				<input name="acao" id="acao" type="hidden" value="novo">
				<div class="1">
					<div class="form-group">
					<label for="titulo">Título:</label>
					<input name="titulo" id="titulo" type="text" class="form-control" required placeholder="Digite o título" value="<?php if(isset($rs['titulo_projeto_pesquisa'])) echo $rs['titulo_projeto_pesquisa']; ?>">
				</div>
				<div class="form-group">
					<label for="palchav">Palavras-chave:</label>
					<input name="palchav" id="palchav" type="text" class="form-control" required placeholder="Palavras; chave;" value="<?php if(isset($rs['codigo_projeto_pesquisa'])) echo date("Y-m-d", strtotime($rs['codigo_projeto_pesquisa'])); ?>">
				</div>
				<span class="dark">Arquivo:
				</span>
				<div class="input-group form-group">
					<label class="input-group-btn">
						<span class="btn btn-primary">
							Enviar novo arquivo: <input type="file" id="novoarquivo" name="novoarquivo" style="display: none;">
						</span>
					</label>
					<input type="text" class="form-control" readonly="">
				</div>
				<br>
				<div class="form-group text-center">
				<button type="submit" class="btn btn-primary" style="border-radius: 4px;">Salvar</button>
				</div>
			 </div>
			</form>
		</div>
		</div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
	<script>
	$(function() {
	  // We can attach the `fileselect` event to all file inputs on the page
	  $(document).on('change', ':file', function() {
		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	  });
	  // We can watch for our custom `fileselect` event like this
	  $(document).ready( function() {
		  $(':file').on('fileselect', function(event, numFiles, label) {

			  var input = $(this).parents('.input-group').find(':text'),
				  log = numFiles > 1 ? numFiles + ' files selected' : label;

			  if( input.length ) {
				  input.val(log);
			  } 
		  });
	  });
	  
	});
	</script>
 </body>
</html>