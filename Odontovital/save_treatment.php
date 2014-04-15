<?php
	session_start();
	require_once('connect.php');
	
	$error_cpf = 0;
	$error_username = 0;
	
	$name = addslashes($_POST['name']);
	$cost = addslashes($_POST['cost']);
	$professional = addslashes($_POST['professional']);
		
	mysql_query("INSERT INTO type_treatment (cod, name, cost, doctor) VALUES (0,'$name', '$cost', '$professional')") or die ("Erro ao inserir os dados");
	header ('Location:register_treatments.php?sucess=1');
?>