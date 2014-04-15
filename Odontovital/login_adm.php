<?php
	session_start();
	require_once('connect.php');
	$username = addslashes($_POST['username']);
	$password = md5($_POST['password']);
	
	$result = mysql_query('SELECT * FROM admin WHERE username="'.$username.'" AND password="'.$password.'"'); 
	if (mysql_num_rows($result) > 0){
		$_SESSION['admin'] = $_POST['username'];
		header('Location: restricted.php');
	}else{
		header('Location: restricted.php?password=1');
	}
?>