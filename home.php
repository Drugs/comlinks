<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	require('assets/config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap1.min.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>HOME</title>
	<script src="http://www.w3schools.com/lib/w3data.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://propp.uesc.br/propp2"><span>PROPP - HOME</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="http://propp.uesc.br/propp2/home.php#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nome']; ?> <span class="caret"></span> </a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://propp.uesc.br/propp2/home.php#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
							<li><a href="http://propp.uesc.br/propp2/home.php#"><span class="glyphicon glyphicon-cog"></span> Configurações</a></li>
							<li><a href="http://propp.uesc.br/propp2/home.php#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar collapse in">
		<ul class="nav menu">
			<li class="active">
				<a href="view/projeto" id="ger_projeto"><span class="glyphicon glyphicon-list-alt"></span>Cadastrar Projeto</a>
			</li>
			<!--<li><a href="http://medialoot.com/preview/lumino/widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>-->
			<li class="parent">
				<a href="#" id="orcam"><span class="glyphicon glyphicon-user"></span>Perfil</a>
				<a href="#" id="proj"><span class="glyphicon glyphicon-file"></span>Lista de Projetos</a>
			</li>
			<!--<li role="separator" class="divider"></li>
			<li><a href="http://propp.uesc.br/propp2/home.php#"><span class="glyphicon glyphicon-user"></span> Meu Perfil</a></li>-->
		</ul>
		<!--<div class="attribution"><a href="http://www.propp.uesc.br">Equipe WebPropp</a></div>-->
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a id="gerenciarprojeto" href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">HOME</li>
			</ol>

			<?php //$path = 'controlers/gerenciar-projeto_teste.php'; ?>
			<!-- ADICIONAR AQUI -->
			<!--<div w3-include-html="controlers/cadastrar-orcamento.php"></div>-->
			<?php //include 'controlers/gerenciar-projeto_teste.php';?>
			<div id="page">
				
			</div>


			<script>
				$(document).ready(function() {
					$("#page").load("controlers/gerenciar-projeto_teste.php");

					$( "#ger_projeto" ).click(function() {
						$("#page").empty();
						$("#page").load("controlers/gerenciar-projeto_teste.php");
						<?php //include 'controlers/gerenciar-projeto_teste.php';?>
					});

					$( "#gerenciarprojeto" ).click(function() {
						$("#page").empty();
						$("#page").load("controlers/gerenciar-projeto_teste.php");
						<?php //include 'controlers/gerenciar-projeto_teste.php';?>
					});

					$( "#orcam" ).click(function() {
						$("#page").empty();
						$("#page").load("controlers/cadastrar-orcamento_teste.php");
						//console.log("lol");
						<?php //include 'controlers//cadastrar-orcamento_teste.php';?>
					});

					$( "#proj" ).click(function() {
						$("#page").empty();
						$("#page").load("controlers/cadastrar-projeto_teste.php");
						<?php //include 'controlers//cadastrar-projeto_teste.php';?>
					});

					$( "#partc" ).click(function() {
						$("#page").empty();
						$("#page").load("controlers/cadastrar-participantes_teste.php");
						<?php //include 'controlers//cadastrar-participantes_teste.php';?>
					});
				});
				
			</script>
			
		</div><!--/.row-->

		<script>
			w3IncludeHTML();
		</script>

</body>