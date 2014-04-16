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
	'<div id="cssmenu">
		<div id="sliderFrame">
			<div id="slider">
				<img src="Images/image01.jpg" />
				<img src="Images/image02.jpg" />
				<img src="Images/image03.jpg" />
				<img src="Images/image04.jpg" />
				<img src="Images/image05.jpg" />
			</div>
		</div>
			
		<div id = "logo"></div>
		
		<ul>
			<li> <a href="teste.php"><span id="link1">CADASTRO DE ENQUETES</span></a> </li>
			<li> <a href="teste.php"><span id="link1">CADASTRO DE ENQUETES</span></a> </li>
			<li> <a href="teste.php"><span id="link1">CADASTRO DE ENQUETES</span></a> </li>
			<li> <a href="teste.php"><span id="link1">CADASTRO DE ENQUETES</span></a> </li>
		</ul>
	</div>
		
	<div id="body_background"></div>		
		
		
	<div id="footer">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, \'script\', \'facebook-jssdk\'));</script>
		
	</div>';
	bottom();
		
?>