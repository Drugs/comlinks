<?php 
	ob_start();
	header('Content-Type: text/html; charset=utf-8');
	require('../../assets/config.php');
?>
<style>
	span.dark {
		font-weight: 700;
	}
	.list-group-item {
		background-color: #30a5ff;
		1px solid rgba(5, 125, 218, 0.45);
		color: #fff;
	}
	.panel-heading {
		color: #fff;
		background-color: #30a5ff;
		border-color: #30a5ff;
	}
	.panel-heading p {
		color: #fff;
	}
	.file{
		color: #fff;
	}
	.file:focus, .file:hover {
    color: #333;
    text-decoration: underline;
	}
</style>
<body>
	<!-- GERENCIAR PROJETO-->
	<div id="mensagem" class="container" style="padding-top: 60px;">
		<div class="row">
	<?php
		$id_projeto_pesquisa = 1;
		$query = "	SELECT codigo_projeto_pesquisa,titulo_projeto_pesquisa,pal_chave_projeto_pesquisa,arquivo_projeto_pesquisa,status_projeto 
					FROM projeto_pesquisa 
					JOIN status_projeto_pesquisa on id_status_projeto = fk_id_status_projeto
					WHERE id_projeto_pesquisa = ".$id_projeto_pesquisa;
		$return = mysql_query($query);
		$row = mysql_fetch_array($return); ?>
		
		<div class="panel">
			<div class="panel-heading">
				<?echo "<p class=\"titulo_proj\"><span class='glyphicon glyphicon-folder-open'></span> {$row['codigo_projeto_pesquisa']} - {$row['titulo_projeto_pesquisa']}</p>";?>
			</div>
			<div class="panel-footer">
				<ul class="list-group">
					<li class="list-group-item"><?echo "<b><span class='glyphicon glyphicon-th-list'></span> Palavras chave:</b><span class=\"palchav\">{$row['pal_chave_projeto_pesquisa']}</span>";?></li>
					<li class="list-group-item"><?echo "<b><span class='glyphicon glyphicon-paperclip'></span> Anexo: </b><a target='_blank' href='../../assets/files/{$row['arquivo_projeto_pesquisa']}' class=\"file\">Anexo do Projeto</a>";?></li> 
					<li class="list-group-item"><?echo "<b><span class='glyphicon glyphicon-tag'></span> Status:</b><span class=\"status\">{$row['status_projeto']}</span>";?></li> 
				</ul>
			</div>
		</div>
		<h3 class="text-center">Editar Dados do Projeto</h3><br>
		<div class="row col-xs-12 col-sm-12 col-md-8 col-md-push-2">
			<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="../../models/projeto-model">
				<input name="acao" id="acao" type="hidden" value="novo">
				<input name="projeto" id="projeto" type="hidden" value="<?echo $id_projeto_pesquisa;?>">
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
						<span class="btn btn-primary">Enviar novo arquivo:<input type="file" id="novoarquivo" name="novoarquivo" style="display: none;"></span>
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="../assets/js/bootstrap.min.js"></script>-->
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