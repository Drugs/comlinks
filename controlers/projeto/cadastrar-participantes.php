<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');
require('../../assets/config.php');
?>
<body>
<!-- CADASTRAR PROJETO-->
<div id="mensagem" class="container" style="padding-top: 60px;">
	<div class="row">
		<h3 class="text-center">Cadastrar Participantes</h3><br>
		<?
		$id_projeto_pesquisa = 1;
		$query = "SELECT * FROM projeto_pesquisa_equipe WHERE fk_id_projeto_pesquisa = ".$id_projeto_pesquisa;
		$return = mysql_query($query);
		if ($return >= 0){
			$id = 1;
			echo "
			<div class='col-xs-12 col-sm-8 col-md-8 col-md-push-2' >
				<table class='table'> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Nome do Participante</th> 
							<th>Função</th> 
							<th>Data Entrada</th>  
							<th><center>Editar</center></th>
							<th><center>Remover</center></th>
						</tr> 
					</thead> 
				<tbody>";
			while ($row = mysql_fetch_array($return)){
				echo "
					<tr> 
						<th class='num' value=".$id.">".$id."</th>
						<td class='item'>".$row['ppe_nome']."</td> 
						<td class='valor'>".$row['ppe_participacao']."</td> 
						<td class='fonte'>".$row['ppe_data_entrada']."</td> 
						<td>
							<a class='edit'><center><span class='edit text-center glyphicon glyphicon-pencil' aria-hidden='true' style='font-size:25px;
							color:#4286f4; font-decoration:none;' data-toggle='modal' data-target='#modalEdicao'></span></center><a>   
						</td>
						<td>
							<a class='remove'><center><span class='remove text-center glyphicon 
							glyphicon-remove-circle' aria-hidden='true' style='font-size:25px;
							color:red; font-decoration:none;' data-toggle='modal' data-target='#modalRemocao'></span></center><a>
						</td>
					</tr>";
				$id += 1;
			}
			echo "</tbody> 
				</table>
			</div>
			";
		} ?>
		<div class="col-xs-12 col-sm-6 col-md-8 col-md-push-2" >
			<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="cad-projeto.php" >
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input name="nome" id="nome" type="text" class="form-control" required placeholder="Digite o nome do pesquisador">
				</div>
				<div class="form-group">
					<label for="part">Função:</label>
					<input name="part" id="part" type="text" class="form-control" required placeholder="Digite o tipo de participação. Ex.: Coordenador">
				</div>
				<div class="form-group text-center submit">
					<button type="submit" class="btn btn-primary" style="border-radius: 4px;">Salvar</button>
				</div>
				<h4><a href="#" id="addScnt">+ adicionar mais um pesquisador</a></h4>
			</form>
		</div>
	</div>
</div>

<!-- EDIÇÂO -->
<div class="modal fade" id="modalEdicao" tabindex="-1" role="dialog" aria-labelledby="modalEdicao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><center>Editar Item de Orçamento</center></h3>
      </div>
      <div class="modal-body">
      	<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="models/projeto-model.php" >
				<input name="acao" id="acao" type="hidden" value="orcamento">
				<div class="form-group">
					<label for="itemEdit">Nome:</label>
					<input id="itemEdit" type="text" class="form-control" required placeholder="Descrição do recurso">
				</div>
				<div class="form-group">
					<label for="valorEdit">Função:</label>
					<input id="valorEdit" type="text" class="form-control" required placeholder="Digite o valor em Reais.">
				</div>
				<div class="form-group">
					<label for="fonteEdit">Data Entrada:</label>
					<input id="fonteEdit" type="text" class="form-control" required placeholder="Digite a fonte do recurso. Ex.: FAPESB">
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Salvar Edição</button>
      </div>
    </div>
  </div>
</div>

<!-- REMOÇÂO -->
<div class="modal fade" id="modalRemocao" tabindex="-1" role="dialog" aria-labelledby="modalRemocao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><center>Confirmar Remoção ?</center></h3>
      </div>
      <div class="modal-body">
      	<table class="table">
      		<thead>
		  		<tr> 
					<th>#</th>
					<th>Nome</th> 
					<th>Função</th> 
					<th>Data Entrada</th> 
				</tr>
			</thead>
			<tbody>
		  		<tr> 
					<th id="idDel">ID_Item</th>
					<td id="itemDel">Item</td> 
					<td id="valDel">Valor (R$)</td> 
					<td id="fonteDel">Fonte</td> 
				</tr>
			</tbody>
      	</table>
      </div>
      <div class="modal-footer">
        <div class="col-sm-push-6 col-md-push-6 col-xs-push-6">
        	<button type="button" class="btn btn-danger push-right" data-dismiss="modal">Cancelar</button>
        	<button type="button" class="btn btn-primary push-left">Confirmar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="../assets/js/bootstrap.min.js"></script>-->
<script>
$(function() {
    var scntDiv = $('#p_scents');
    var i = $('#p_scents p').size() + 1;
    
    $('#addScnt').on('click', function() {
            $('<div class="lol"><div class="form-group"> <label for="nome">Nome:</label> <input name="nome' + i + '" id="nome" type="text" class="form-control" required placeholder="Digite o nome do pesquisador"></div><div class="form-group"> <label for="papel">Tipo de Participação:</label> <input name="part' + i + '" id="part" type="text" class="form-control" required placeholder="Digite o tipo de participação. Ex.: Coordenador"><h4><a href="#" id="lol">- Remover esse pesquisador</a></h4></div></div>').insertBefore('.submit');
            i++;
			//console.log(i);
            return false;
    });
    
    $('#contactform').on('click', '#lol', function() { 
            if( i >= 1 ) {
                    $(this).closest('div.lol').remove();
					//console.log($(this).closest('div'));
					
                    i--;
            }
            return false;
	});
	
	$('a .remove').on('click', function(){
		var parent = $(this).parents('tr');

		var num = parent.find('.num').text();
		var item = parent.find('.item').text();
		var valor = parent.find('.valor').text();
		var fonte =  parent.find('.fonte').text();

		$('#idDel').text(num);
		$('#itemDel').text(item);
		$('#valDel').text(valor);
		$('#fonteDel').text(fonte);
	});

	$('a .edit').on('click', function(){

		var parent = $(this).parents('tr');

		var item = parent.find('.item').text();
		var valor = parent.find('.valor').text();
		var fonte =  parent.find('.fonte').text();

		$('#itemEdit').val(item);
		$('#valorEdit').val(valor);
		$('#fonteEdit').val(fonte);
	});

});

</script>
</body>
</html>