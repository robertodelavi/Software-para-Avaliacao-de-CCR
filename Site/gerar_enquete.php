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
		<div id="enquete">
			<div id="title">Nova Enquete</div>
			<form id="form" action="logging.php" method="POST">
				<input type="text" name="titulo-enquete" placeholder="Título da enquete" id="text"> <br/>
				<input type="text" name="semestre" placeholder="Semestre" id="text"> <br/>
				<div id="question">
					<form id="form_question" action="teste.php" method="POST">
						<input type="text" name="descr_perg" placeholder="Descrição da pergunta" id="text-question">
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
						
						<button type="submit" name="submit" value="submit" id="button-question">Concluir pergunta</button>
					</form>
				</div>
				<button type="submit" name="submit" value="submit" id="button" onclick="add_form();">Adicionar Item</button>
				<button type="submit" name="add_disc" value="add_disc" id="button-right" onclick="add_disc_prof();">Selecionar disciplinas e professores</button> 
				
				<div id="dp">
					<div id="title">Disciplinas e Professores</div>
					<div id="disc">Disciplina:</div> 
					<div id="prof">Professor:</div>
					<form id="form_disc" action="teste.php" method="POST">
						<div id="form_disc_prof">
							<div id="select_prof_disc">
								<select name="disciplina" id="disciplina" onchange="show()">
									<option value="">Selecione</option>
									<option value="1">Algoritmos e Programação</option>
									<option value="2">Banco de Dados I</option>
									<option value="3">Estrutura de Dados I</option>
								</select>
								<select name="professor" id="professor" onchange="show()">
									<option value="">Selecione</option>
									<option value="1">Fernando</option>
									<option value="2">Denio</option>
									<option value="3">Rafael</option>
								</select>
							</div>
						</div>
						<button type="submit" name="submit" value="submit" id="concluir">Concluir</button>
					</form>
					<button type="button" name="submit" value="button" id="button" onclick="add_disc();">Adicionar Item</button>
				</div>
				<button type="submit" name="submit" value="submit" id="button-question">Gerar</button>
			</form>
		</div>
		
	
	</div>		
		
		
	<div id="footer">
		<div id="footer_bar"></div>
	</div>';
	bottom();
		
?>