<?php
	session_start();
	require_once('connect.php');
	
	$result = mysql_query('SELECT cpf FROM patient WHERE username="'.$_SESSION['username'].'"');
	if (mysql_num_rows($result) > 0){
		$data = mysql_fetch_assoc($result);
		$cpf = $data['cpf'];
		echo $cpf;
		mysql_query('DELETE FROM phone WHERE patient="'.$cpf.'"');
		mysql_query('DELETE FROM patient WHERE cpf="'.$cpf.'"');
	}
	
	session_destroy();
	header ('Location:myodonto.php');
?>