<?php
	$nome = $_POST['Nome'];
	$sobrenome = $_POST['Sobrenome'];
	$telefone = $_POST ['Telefone'];
	$CPF = $_POST ['CPF'];
	$cidade = $_POST ['Cidade'];
	$estado = $_POST ['Estado'];
	$usuario = $_POST ['usuario'];
	$senha = $_POST ['senha'];
	//$strcon = mysqli_connect('localhost','teste','123','banco_teste') or die('Erro ao conectar ao banco de dados');
	$sql = "INSERT INTO cadastro VALUES ";
	$sql .= "('$nome', '$sobrenome', '$telefone', '$CPF', '$cidade', '$estado')"; 
	//mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
	//mysqli_close($strcon);
	echo "Cliente cadastrado com sucesso!";
	echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
?>