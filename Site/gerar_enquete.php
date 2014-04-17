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
		
	<div id="body_background">
		<div id="enquete">
			<div id="title">Nova Enquete</div>
			<input type="text" name="titulo-enquete" placeholder="Título da enquete" id="text"> <br/>
			<input type="text" name="semestre" placeholder="Semestre" id="text"> <br/>
			<input type="text" name="descr_perg" placeholder="Descrição da pergunta" id="text">
			<div id="option">Tipo de pergunta:</div> 
			<select name="tipo_pergunta" id="select" onchange="show()">
				<option value="">Selecione</option>
				<option value="1">Texto</option>
				<option value="2">Múltipla escolha</option>
				<option value="3">Caixa de seleção</option>
			</select>
			
			<div id="multiple_choice">
				<i class="flaticon-circle46"></i> <input type="text" name="option" placeholder="Opção 1" id="field"> <br/>
				<i class="flaticon-circle46"></i> 
					<a href="teste.php"><input type="text" name="option" placeholder="Clique para adicionar uma opção" id="field" disabled></a> <br/>
				<div class="link">ou <a href="teste.php">adicionar "Outro"</a></div>
			</div>
			
			<div id="select_box">
				<i class="flaticon-black180"></i> <input type="text" name="option" placeholder="Opção 1" id="field"> <br/>
				<i class="flaticon-black180"></i> 
					<a href="teste.php"><input type="text" name="option" placeholder="Clique para adicionar uma opção" id="field" disabled></a> <br/>
				<div class="link">ou <a href="teste.php">adicionar "Outro"</a></div>
			</div>
			
			<button type="submit" name="submit" value="submit" id="question_right">Concluir pergunta</button>			
		</div>
		<button type="submit" name="submit" value="submit" id="button">Adicionar Item</button>
	
	</div>		
		
		
	<div id="footer"></div>';
	bottom();
		
?>