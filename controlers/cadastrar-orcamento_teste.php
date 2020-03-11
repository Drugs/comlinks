<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');
require('../assets/config.php');
//header('Content-Type: text/html; charset=utf-8');
?>
<!-- Bootstrap -->
<!--<link href="../assets/css/bootstrap1.min.css" rel="stylesheet">-->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>-->
<!--<script src="../assets/js/modernizr.custom.js"></script>-->
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
<body>
<!-- CADASTRAR PROJETO-->
<div id="mensagem" class="container" style="padding-top: 60px;">
	<div class="row">
		<h3 class="text-center">Cadastrar Orçamento</h3><br>
		<?php
			$id_projeto_pesquisa = 1;
			$query = "SELECT orcamento_item, orcamento_valor, orcamento_fonte FROM projeto_pesquisa_orcamento WHERE fk_id_projeto_pesquisa = ".$id_projeto_pesquisa;
			$return = mysql_query($query);
			if ($return >= 0){
				$id = 1;
				echo "
				<div class='col-xs-12 col-sm-8 col-md-8 col-md-push-2' >
					<table class='table'> 
						<thead> 
							<tr> 
								<th>#</th> 
								<th>Item de Orçamento</th> 
								<th>Valor (R$)</th> 
								<th>Fonte</th>  
								<th><center>Editar</center></th>
								<th><center>Remover</center></th>
							</tr> 
						</thead> 
						<tbody> 
				";
				while ($row = mysql_fetch_array($return)){
					echo "
						<tr> 
							<th class='num' value=".$id.">".$id."</th>
							<td class='item'>".$row['orcamento_item']."</td> 
							<td class='valor'>".$row['orcamento_valor']."</td> 
							<td class='fonte'>".$row['orcamento_fonte']."</td> 
							<td>
								<a class='edit'><center><span class='edit text-center glyphicon glyphicon-pencil' aria-hidden='true' style='font-size:25px;
								color:#4286f4; font-decoration:none;' data-toggle='modal' data-target='#modalEdicao'></span></center><a>   
							</td>
							<td>
								<a class='remove'><center><span class='remove text-center glyphicon 
								glyphicon-remove-circle' aria-hidden='true' style='font-size:25px;
								color:red; font-decoration:none;' data-toggle='modal' data-target='#modalRemocao'></span></center><a>
							</td>
						</tr>
					";
					$id += 1;
				}

				echo "</tbody> 
					</table>
				</div>
				";
			}
		?>
		<div class="row col-xs-12 col-sm-6 col-md-8 col-md-push-2" >
			<form id="contactform" class="rounded" enctype="multipart/form-data" method="post" action="models/projeto-model.php" >
				<input name="acao" id="acao" type="hidden" value="orcamento">
				<div class="form-group">
					<label for="item">Item de Orçamento:</label>
					<input name="item[]" id="item" type="text" class="form-control" required placeholder="Descrição do recurso">
				</div>
				<div class="form-group">
					<label for="valor">Valor (R$):</label>
					<input name="valor[]" id="valor" type="number" min="0.01" step="0.01" class="form-control" required placeholder="Digite o valor em Reais.">
				</div>
				<div class="form-group">
					<label for="fonte">Fonte:</label>
					<input name="fonte[]" id="fonte" type="text" class="form-control" required placeholder="Digite a fonte do recurso. Ex.: FAPESB">
				</div>
				<hr>
				<div class="form-group text-center submit">
					<button id="sendOrcm" type="submit" class="btn btn-primary" style="border-radius: 4px;">Salvar</button>
				</div>
				<h4><a href="#" id="addScnt">+ adicionar mais um item</a></h4>
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
					<label for="itemEdit">Item de Orçamento:</label>
					<input id="itemEdit" type="text" class="form-control" required placeholder="Descrição do recurso">
				</div>
				<div class="form-group">
					<label for="valorEdit">Valor (R$):</label>
					<input id="valorEdit" type="number" min="0.01" step="0.01" class="form-control" required placeholder="Digite o valor em Reais.">
				</div>
				<div class="form-group">
					<label for="fonteEdit">Fonte:</label>
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
					<th>Item de Orçamento</th> 
					<th>Valor (R$)</th> 
					<th>Fonte</th> 
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
            $('<div class="lol"><div class="form-group"><label for="item">Item de Orçamento:</label><input name="item[]" id="item" type="text" class="form-control" required placeholder="Descrição do recurso"></div><div class="form-group"><label for="valor">Valor (R$):</label><input name="valor[]" id="valor" type="number" min="0.01" step="0.01" class="form-control" required placeholder="Digite o valor em Reais."></div><div class="form-group"><label for="fonte">Fonte:</label><input name="fonte[]" id="fonte" type="text" class="form-control" required placeholder="Digite a fonte do recurso. Ex.: FAPESB"><h4><a href="#" id="lol">- Remover esse item</a></h4></div><hr></div>').insertBefore('.submit');
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
	
	$('#sendOrcm').on('click', function(){
		event.preventDefault();
		sendOrcmento();		
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

	function sendOrcmento() {
    
		//var formData = $('#contactform').serializeArray();

        $.ajax({
            method: 'POST',
            url: 'models/projeto-model.php',
            data: {
				acao : $('#acao').val(),
				item :  $('form #item').serializeArray(),
				valor :  $('form #valor').serializeArray(),
				fonte :  $('form #fonte').serializeArray()
            }
        })//webpropp@uesc.br
        .success(function( data ) {
            //console.log(data);
        });
    
    }

</script>
 </body>
</html>