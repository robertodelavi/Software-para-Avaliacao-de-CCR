<?php
echo '<!DOCTYPE html>';
/*
Universidade Federal da Fronteira Sul - UFFS
Ciência da Computação - Campus Chapecó
Programação II - 19/03/2013
Aline Menin

Objetivo: Implementar um sistema web completamente funcional. Entende-se por funcional um sistema
que esteja apto a ser entregue a um potencial cliente, sendo esse capaz de utilizar a aplicação sem problemas.
*/
	session_start();
	require_once('library.php');
	
	cabecalho();
	
	echo 
	'<div id="menu">			
		<div id = "logo"></div>
		
		<ul>
			<li> <a href="gerar_enquete.php">NOVA ENQUETE</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
			<li> <a href="teste.php">CADASTRO DE ENQUETES</a> </li>
		</ul>
	</div>
		
	<div id="body_background">
	</div>		
		
		
	<div id="footer">
		<div id="footer_bar"></div>
		
	</div>';
	bottom();
		
?>