<!--------------------------- CADASTROS -------------------------------------->
<?php 
	if($_SESSION['userPermissao'] == 1){ // ADM
?>
        <li class="navprimary"><a class="abremenu" href="#">Cadastros</a> 
            <ul <?php if($_GET['module'] == 'cadastros'){ echo 'class="selected"';}?>>     	        
                <li><a href='?module=cadastros&acao=nova_enquete'>Enquete</a></li>						
            </ul> 
        </li>
<?php
	}
?>
