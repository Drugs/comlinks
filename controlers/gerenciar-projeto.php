<?php 
ob_start();
require('../assets/config.php');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />	
	<head>
		<title>PROPP</title>
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
	</head>
	<style>
		@media (min-width: 992px){
			.col-md-offset-2 {
				margin-left: 16.66666667% !important;
			}
		}
		.progress {
			margin: 0;
		}
	</style>
	<body>

	<div class="center container-fluid ">
		<div class="panel panel-default col-sm-12 col-md-4 col-md-offset-2" style="padding: 0px;margin: 15px 15px 0;word-break: break-all;">
			<div class="panel-heading">
				<a href="cadastrar-projeto.php">Cadastro do Projeto
				<span class="glyphicon glyphicon-pencil pull-right"></span></a>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:100%">
					<span class="sr-only">100% Completo</span>
					100% Completo (feito)
				</div>
			</div>
			<div class="panel-body">
				<span>$titulo_projeto</span>
			</div>
		</div>
		<div class="panel panel-default col-sm-12 col-md-4" style="padding: 0px;margin: 15px 15px 0;word-break: break-all;">
			<div class="panel-heading">
				<a href="cadastrar-participantes.php">Cadastrar Participantes
				<span class="glyphicon glyphicon-pencil pull-right"></span></a>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="sr-only">70% Completo</span>
					70% Completo (incompleto)
				</div>
			</div>
			<div class="panel-body">
				<span>$coordenador</span>
			</div>
		</div>
		<div class="panel panel-default col-sm-12 col-md-4 col-md-offset-2" style="padding: 0px;margin: 15px 15px 0;word-break: break-all;">
		<div class="panel-heading">
			<a href="cadastrar-orcamento.php">Cadastrar Orçamento
			<span class="glyphicon glyphicon-minus pull-right"></span></a>
		</div>
		<div class="progress">
				<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:30%">
					<span class="sr-only">0% Completo</span>
					0% Completo (não feito)
				</div>
		</div>
		<div class="panel-body">
			<span>$total</span>
		</div>
		</div>
		<div class="panel panel-default col-sm-12 col-md-4" style="padding: 0px;margin: 15px 15px 0;word-break: break-all;">
		<div class="panel-heading">
			<a>Visualizar e Enviar
			<span class="glyphicon glyphicon-ok pull-right"></span></a>
		</div>
		<div class="progress">
				<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:25%">
					<span class="sr-only">25% Completo</span>
					25% Completo (incompleto)
				</div>
		</div>
		  <div class="panel-body">
		  <span>$status</span>
		  </div>
		</div>
	</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
 </body>
</html>