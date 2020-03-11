<?php
session_start();
require_once('../assets/config.php');
	switch ($_POST['acao']) {
		case 'orcamento':
			$result = cadastra_orcamento($_POST, $_POST['crud']);
		break;
		case 'equipe':
			$result = cadastra_equipe($_POST);
		break;
		case 'novo':
			$result = cadastra_novo($_POST);
		break;
		case 'final':
			$result = cadastra_final($_POST);
		break;		
		default:
			echo "defeito";
			// print_r($_POST);
			// foreach($_POST['formData'] as $key => $value){
				// echo $key;
				// echo ' ';
				// echo $value;
			// }
	}
	function cadastra_orcamento($data , $CRUD){
		
		switch ($CRUD){
			case 0:
				$query = "INSERT INTO X VALUES ()";
			break;


			case 1:
				$query = "	UPDATE projeto_pesquisa_orcamento
							SET orcamento_item = '{$data['item']}',
								orcamento_valor = '{$data['valor']}',
								orcamento_fonte = '{$data['fonte']}'
							WHERE id_pp_orcamento = {$data['id']}";
			break;


			case 2:
				$query = "DELETE FROM projeto_pesquisa_orcamento
							WHERE orcamento_item = '{$data['item']}'
							AND orcamento_valor = '{$data['valor']}'
							AND orcamento_fonte = '{$data['fonte']}'
							AND id_pp_orcamento = {$data['id']}";
			break;
		}

		$result = mysql_query($query);

		if ($result > 0)
			printf("edicao succes");
		else
			printf("edicao fail");
	}
	function cadastra_equipe($data, $CRUD){
		switch ($CRUD){
			case 0:
				
			break;


			case 1:
				
			break;


			case 2:

			break;
		}
	}
	function cadastra_novo($data, $CRUD = null){
		
		$target_dir = "../assets/files/";
		$path_parts = pathinfo($_FILES["novoarquivo"]["name"]);
		$extension = $path_parts['extension'];
		$target_file = $target_dir . basename($nomearquivo);
		$nomearquivo = 'projpesqfile';
		$nomearquivo .= 1;
		$nomearquivo .= '.'.$extension;
		// Check if image file is a actual image or fake image
		move_uploaded_file($_FILES['novoarquivo']["tmp_name"], $target_dir.$nomearquivo);
		mysql_query("update `projeto_pesquisa` set arquivo_projeto_pesquisa = '{$nomearquivo}', pal_chave_projeto_pesquisa = '{$_POST['palchav']}', titulo_projeto_pesquisa = '{$_POST['titulo']}' where id_projeto_pesquisa = 1") or die(mysql_error());
		$_SESSION['regName'] = 'regis';
		header("Location: /propp2/view/projeto");
	}
	function cadastra_final($data, $CRUD = null){
		echo "final<br>";
		print_r($data);
	}
?>