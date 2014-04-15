<?php
	session_start();
	require_once('connect.php');
	
	$_SESSION['patient'] = $_POST['patient'];
	$_SESSION['treatment'] = $_POST['treatment'];
	
	$patient = addslashes($_POST['patient']);
	$treatment = addslashes($_POST['treatment']);

	$result = mysql_query('SELECT cpf FROM patient WHERE cpf="'.$patient.'"');
	if (mysql_num_rows($result) > 0){	
		$result = mysql_query('SELECT cod FROM type_treatment WHERE name="'.$treatment.'"');
		if (mysql_num_rows($result) > 0){
			$data = mysql_fetch_assoc($result);
			$cod = $data['cod'];
			mysql_query("INSERT INTO treatment (type, patient) VALUES ('$cod','$patient')") or die ("Erro ao inserir os dados");
		}
		$_SESSION['patient'] = "";
		$_SESSION['treatment'] = "";
		header ('Location:relate.php?sucess=1');
	}else{
		header ('Location:relate.php?error=1');
	}
?>