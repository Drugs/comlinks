<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');
require('../assets/config.php');
$id_projeto_pesquisa =1;
$query ="	
	SELECT  `id_projeto_pesquisa` , titulo_projeto_pesquisa as titulo, soma, COUNT( id_pp_equipe ) AS equipe, status_projeto as status
	FROM projeto_pesquisa
	join status_projeto_pesquisa on id_status_projeto = fk_id_status_projeto
	JOIN (
		SELECT SUM( orcamento_valor ) AS soma,  `fk_id_projeto_pesquisa` 
		FROM projeto_pesquisa_orcamento
		WHERE fk_id_projeto_pesquisa ={$id_projeto_pesquisa}
		GROUP BY fk_id_projeto_pesquisa
	) AS orc ON orc.fk_id_projeto_pesquisa = id_projeto_pesquisa
	JOIN projeto_pesquisa_equipe
	WHERE id_projeto_pesquisa ={$id_projeto_pesquisa}
	GROUP BY  `id_projeto_pesquisa`
";
$query = mysql_query($query);
$projeto_preview = mysql_fetch_assoc($query);
$progress =0;
?>
<style>
	@media (min-width: 992px){
		.col-md-offset-2 {
			margin-left: 16.66666667% !important;
		}
	}
	.progress {
		margin: 0;
	}
	.cardpropp {
		padding: 0px;margin: 15px 10px 0;word-break: break-all;
	}
	@media (min-width: 992px){
		.col-md-5 {
			width: 46.7%;
		}
	}
	div .cardpropp:nth-child(3n+3) {  
		clear: both;
	}
</style>

<div class="center container-fluid ">
	<div class="panel panel-default col-sm-12 col-md-5 col-md-offset-1 cardpropp" >
	<?
		if(isset($projeto_preview['titulo']) and $projeto_preview['titulo'] != ''){
			$preview = "Título: {$projeto_preview['titulo']}";
			$action = 'pencil';
			$percent = 100;
			$progress++;
		}else{
			$preview = 'Título não cadastrado.';
			$action = 'minus';
			$percent = 40;
		}
	?>
		<div class="panel-heading">
			<a id="projeto" href="#">Cadastro do Projeto
			<span class="glyphicon glyphicon-<?echo $action;?> pull-right"></span></a>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?echo $percent;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?echo $percent;?>%">
				<span class="sr-only"><?echo $percent;?>% Completo</span>
				<?echo $percent;?>% Completo
			</div>
		</div>
		<div class="panel-body">
			<span><?echo $preview;?></span>
		</div>
	</div>
	<div class="panel panel-default col-sm-12 col-md-5 cardpropp">
	<?
		if(isset($projeto_preview['equipe']) and $projeto_preview['equipe'] != 0){
			$preview = "{$projeto_preview['equipe']} participantes cadastrados";
			$action = 'pencil';
			$percent = 100;
			$progress++;
		}else{
			$preview = 'Nenhum participante cadastrado.';
			$action = 'minus';
			$percent = 40;
		}
	?>
		<div class="panel-heading">
			<a id="participante" href="#">Cadastrar Participantes
			<span class="glyphicon glyphicon-<?echo $action;?> pull-right"></span></a>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="<?echo $percent;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?echo $percent;?>%">
				<span class="sr-only"><?echo $percent;?>% Completo</span>
				<?echo $percent;?>% Completo
			</div>
		</div>
		<div class="panel-body">
			<span><?echo $preview;?></span>
		</div>
	</div>
	<div class="panel panel-default col-sm-12 col-md-5 col-md-offset-1 cardpropp">
	<?
		if(isset($projeto_preview['soma']) and $projeto_preview['soma'] != 0){
			$preview = "Valor total: R$ {$projeto_preview['soma']}";
			$action = 'pencil';
			$percent = 100;
			$progress++;
		}else{
			$preview = 'Nenhum item cadastrado.';
			$action = 'minus';
			$percent = 40;
		}
	?>
	<div class="panel-heading">
		<a id="orcamento" href="#">Cadastrar Orçamento
		<span class="glyphicon glyphicon-<?echo $action;?> pull-right"></span></a>
	</div>
	<div class="progress">
			<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="<?echo $percent;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?echo $percent;?>%">
				<span class="sr-only"><?echo $percent;?>% Completo</span>
				<?echo $percent;?>% Completo
			</div>
	</div>
	<div class="panel-body">
		<span><?echo $preview;?></span>
	</div>
	</div>
	<div class="panel panel-default col-sm-12 col-md-5 cardpropp" >
	<?
		$progress = $progress*25;
	?>
		<div class="panel-heading">
			<a>Visualizar e Enviar
			<span class="glyphicon glyphicon-ok pull-right"></span></a>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?echo $progress;?>%">
				<span class="sr-only"><?echo $progress;?>% Completo</span>
				<?echo $progress;?>% Completo (incompleto)
			</div>
		</div>
		<div class="panel-body">
			<span><?echo "{$projeto_preview['status']}";?></span>
		</div>
	</div>
</div>
	<script>
		$('#orcamento').on('click', function(){
			event.preventDefault();
			$("#page").empty();
			$("#page").load("controlers/cadastrar-orcamento_teste.php");
		});
		$( "#projeto" ).click(function() {
			$("#page").empty();
			$("#page").load("controlers/cadastrar-projeto_teste.php");
			<?php //include 'controlers//cadastrar-projeto_teste.php';?>
		});

		$( "#participante" ).click(function() {
			$("#page").empty();
			$("#page").load("controlers/cadastrar-participantes_teste.php");
			<?php //include 'controlers//cadastrar-participantes_teste.php';?>
		});
	</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="../assets/js/bootstrap.min.js"></script>-->