<?php
	switch ($_GET['acao']) {

	//CADASTRO DO CARGO		
		case 'lista_professor':
			require_once 'application/cadastros/view/professor/listaProfessor.inc.php';
			break;
		
		case 'nova_enquete':
			require_once 'application/cadastros/view/enquete/cadEnquete.inc.php';
			break;
	}
?>