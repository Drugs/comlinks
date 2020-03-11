<?
ob_start();
// Informações para conexão
$host = 'localhost';
$usuario = 'propp';
$senha = '123@Propp_server';
$banco = 'nprosel';

// Realizando conexão e selecionando o banco de dados
$con = mysql_connect($host, $usuario, $senha) or die(mysql_error());
$db = mysql_select_db($banco, $con) or die(mysql_error());

$email = $_POST["email"];
$password = $_POST["key"];

$query = 
		"SELECT * FROM usuario JOIN pessoa ON fk_pessoa_id = pessoa_id WHERE usu_login LIKE '".$email."'";

$result = mysql_query($query);

if(mysql_num_rows($result)<=0){
	header("location: index.php?error=mail");

}
else{
	$row = mysql_fetch_array($result);
	if($row["usu_senha"] != base64_encode($password))
		header("location: index.php?error=password");
	else{

		// INICIALIZAR SESSION

		session_start();

		$_SESSION["login"] = $row["usu_login"];
		$_SESSION["senha"] = $row["usu_senha"];
		$_SESSION["nivel_acesso"] = $row["fk_usu_niv_id"];
		$_SESSION["nome"] = $row["pessoa_nome"];
		$_SESSION["rg"] = $row["pessoa_rg"];
		$_SESSION["cpf"] = $row["pessoa_cpf"];
		$_SESSION["email"] = $row["pessoa_email"];
		$_SESSION["telefone"] = $row["pessoa_telefone"];
		
		// FIM SESSION

		header("location: home.php");
		
	}

}

//echo $email;
//echo base64_encode($password);

?>