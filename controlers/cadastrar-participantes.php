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
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
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
	<!-- CADASTRAR PROJETO-->
	<div id="mensagem" class="container" style="padding-top: 60px;">
		<div class="row">
			<h3 class="text-center">Cadastrar Participantes</h3><br>
			<div class="row col-xs-12 col-sm-12 col-md-8 col-md-push-2" >
				<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="../models/projeto-model" >
					<input name="acao" id="acao" type="hidden" value="equipe">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input name="nome[]" id="nome[]" type="text" class="form-control" required placeholder="Digite o nome do pesquisador">
					</div>
					<div class="form-group">
						<label for="part">Tipo de Participação:</label>
						<input name="part[]" id="part[]" type="text" class="form-control" required placeholder="Digite o tipo de participação. Ex.: Coordenador">
					</div>
					<div class="form-group text-center submit">
						<button type="submit" class="btn btn-primary" style="border-radius: 4px;">Salvar</button>
					</div>
					<h4><a href="#" id="addScnt">+ adicionar mais um pesquisador</a></h4>
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
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() + 1;
        
        $('#addScnt').on('click', function() {
                $('<div class="lol"><div class="form-group"> <label for="nome">Nome:</label> <input name="nome[]" id="nome" type="text" class="form-control" required placeholder="Digite o nome do pesquisador"></div><div class="form-group"> <label for="papel">Tipo de Participação:</label> <input name="part[]" id="part" type="text" class="form-control" required placeholder="Digite o tipo de participação. Ex.: Coordenador"><h4><a href="#" id="lol">- Remover esse pesquisador</a></h4></div></div>').insertBefore('.submit');
                i++;
				//console.log(i);
                return false;
        });
        
        $('#contactform').on('click', '#lol', function() { 
                if( i >= 1 ) {
                        $(this).closest('div.lol').remove();
						//console.log($(this).closest('div'));
                }
                return false;
		});
	});

	</script>
 </body>
</html>