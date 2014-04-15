<?php
	$local_serve = "localhost";      // local do servidor
	$usuario_serve = "557833";         // nome do usuario
	$senha_serve = "88291426line";                  // senha
	$banco_de_dados = "557833";      // nome do banco de dados

	$conn = @mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor não responde!");

	// conecta-se ao banco de dados
	$db = @mysql_select_db($banco_de_dados,$conn) or die ("Não foi possivel conectar-se ao banco de dados!");
?>