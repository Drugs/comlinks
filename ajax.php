﻿<?php

	// Informações para conexão
	$host = 'localhost';
	$usuario = 'propp';
	$senha = '123@Propp_server';
	$banco = 'nprosel';

	// Realizando conexão e selecionando o banco de dados
	$con = mysql_connect($host, $usuario, $senha) or die(mysql_error());
	$db = mysql_select_db($banco, $con) or die(mysql_error());

	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

    $email = $_POST['email'];

    $query = "SELECT usu_login FROM usuario WHERE usu_login LIKE '".$email."'";

    //echo $query;
    $res = mysql_query($query);

    //echo $res." ".$email;

    if(mysql_num_rows($res)>0){
    	echo "Usuário encontrado!";
    }
    else {
    	echo "Usuário não existe!";
    }

?>
