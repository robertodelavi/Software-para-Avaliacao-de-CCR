<?php
	session_start();
	require_once('connect.php');
	
	$_SESSION['username'] = $_POST['username'];
	
	$username = addslashes($_POST['username']);
	$password = md5($_POST['password']);
	
	$result = mysql_query('SELECT * FROM patient WHERE username="'.$username.'" AND password="'.$password.'"'); 
	if (mysql_num_rows($result) > 0){
		$_SESSION['logged'] = 1;
		header('Location: myodonto.php');
	}else{
		header('Location: login.php?password=1');
	}
?>