<?php
	session_start();
	require_once('connect.php');
	
	$name = addslashes($_POST['name']);
	$last_name = addslashes($_POST['last_name']);
	$email = addslashes($_POST['email']);
	$bdate = addslashes($_POST['birth_date']);
	$rg = addslashes($_POST['rg']);
	$cpf = addslashes($_POST['cpf']);
	$btype = addslashes($_POST['blood_type']);
	$phone = addslashes($_POST['phone']);
	$sex = addslashes($_POST['sex']);
	$cep = addslashes($_POST['cep']);
	$state = addslashes($_POST['dropdown']);
	$city = addslashes($_POST['city']);
	$nbhood = addslashes($_POST['neighborhood']);
	$address = addslashes($_POST['address']);
	$number = addslashes($_POST['number']);
	$complement = addslashes($_POST['complement']);
	$comp = addslashes($_POST['complement']);
	$username = addslashes($_POST['username']);
	$password = md5($_POST['password']);
	
	$result = mysql_query('SELECT cod FROM city WHERE name="'.$city.'" AND state="'.$state.'"');
	if (mysql_num_rows($result) == 0){
		mysql_query("INSERT INTO city (cod, name, state) VALUES (NULL, '$city', '$state')") or die ("Não foi possivel atualizar cidade");
		$ccity = mysql_query('SELECT cod FROM city WHERE name = "'.$_POST['city'].'" AND state="'.$state.'"');
		if (mysql_num_rows($ccity) > 0){
			$data = mysql_fetch_assoc($ccity);
			$ccity = $data['cod'];
			$sqlinsert = "INSERT INTO address (cod_city, neighborhood, address, number, complement, cep) VALUES ('$ccity','$nbhood','$address','$number','$complement','$cep')";
			mysql_query($sqlinsert) or die ("Não foi possivel inserir endereço");
		}
	}			
	
	mysql_query('UPDATE patient SET name="'.$name.'",
						lastname="'.$last_name.'",
						birthdate="'.$bdate.'",
						rg="'.$rg.'",
						cpf="'.$cpf.'",
						email="'.$email.'",
						bloodtype="'.$btype.'",
						sex="'.$sex.'",
						cep="'.$cep.'",
						username="'.$username.'",
						password="'.$password.'" WHERE username="'.$_SESSION['username'].'"') or die ("Não foi possivel atualizar cadastro");
						
	header("Location: update.php?sucess=1");
?>