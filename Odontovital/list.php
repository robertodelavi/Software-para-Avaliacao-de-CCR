<?php
echo '<!DOCTYPE html>';
	session_start();
	require_once('library.php');
	require_once('connect.php');
	
	cabecalho();
	echo '<div id="cssmenu">
			<ul>
				<li class="active "><a href="index.php"><span>Home</span></a></li>
				<li class="has-sub"><a href="#"><span>Treatments</span></a>
					<ul>
						<li><a href="oral_and_maxillofacial_surgery.php"><span id="link1">Oral and Maxillofacial Surgery</span></a></li>
						<li><a href="dental_implant.php"><span>Dental Implant</span></a></li>
						<li><a href="prosthesis.php"><span>Prosthesis</span></a></li>
						<li><a href="orthodontics.php"><span>Orthodontics</span></a></li>
						<li><a href="endodontics.php"><span>Endodontics</span></a></li>
						<li><a href="periodontology.php"><span>Periodontology</span></a></li>
					</ul>
				</li>
				<li class="has-sub"><a href="#"><span>Professional</span></a>
					<ul>
						<li><a href="cristiano.php"><span>Cristiano Demartini</span></a></li>
						<li><a href="avner.php"><span>Avner L. Bertollo</span></a></li>
						<li><a href="laudifer.php"><span>Laudifer Paimel</span></a></li>
					</ul>
				</li>
				<li><a href="myodonto.php"><span>My Odonto</span></a></li>
				<li><a href="restricted.php"><span>Restricted Area</span></a></li>';
				if (isset($_SESSION['logged']) && $_SESSION['logged'] == 1){
					echo '<li class="loginSignup"><a href="logout.php"><span>Logout</span></a></li>';
				}else{
					echo '<li class="loginSignup"><a href="signup.php"><span>Signup</span></a></li>
						<li class="loginSignup"><a href="login.php"><span>Login</span></a></li>';
				}
			echo'</ul>
			</div>
			<div id="body_background">';
			echo '<div id="menu"> 
			<ul>
				<li><a href="register.php"><span>Professional Register</span></a></li> 
				<li><a href="register_treatments.php"><span>Treatments Register</span></a></li> 
				<li><a href="relate.php"><span>Relate Treatments to Patients</span></a></li> 
				<li><a href="list.php"><span>List of Patients and Treatments</span></a></li> 
				<li><a href="table.php"><span>Treatments</span></a></li> 
				<li><a href="logout.php"><span>Exit</span></a></li> 
			</ul>
			</div>
			<div id="background-form-update">
			<div id="background-table" style="background-color:#2F4F4F; color: #DCDCDC;">CPF Patient</div>
			<div id="background-table" style="background-color:#2F4F4F; color: #DCDCDC;">Name Patient</div>
			<div id="background-table" style="background-color:#2F4F4F; color: #DCDCDC;">Code Treatment</div>
			<div id="background-table" style="background-color:#2F4F4F; color: #DCDCDC;">Name Treatment</div>';
			$result = mysql_query('SELECT * FROM treatment');
			if ($rows = mysql_fetch_assoc($result)){
				$cod = $rows['type'];
				$cpf = $rows['patient'];
				$rname = mysql_query('SELECT name FROM patient WHERE cpf="'.$cpf.'"');
				if (mysql_num_rows($rname) > 0){
					$name = mysql_fetch_assoc($rname);
				}
				$rtreat = mysql_query('SELECT name FROM type_treatment WHERE cod="'.$cod.'"');
				if (mysql_num_rows($rtreat) > 0){
					$treat = mysql_fetch_assoc($rtreat);
				}
				echo '<div id="background-table">'.$cpf.'</div>
				<div id="background-table">'.$name["name"].'</div>
				<div id="background-table">'.$cod.'</div>
				<div id="background-table">'.$treat["name"].'</div>';
			}
			echo '</div>';
	echo '</div><div id="footer">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, \'script\', \'facebook-jssdk\'));</script>
		<div id="developed">
			Developed By Aline Menin.
		</div>
		<div id="facebook">
			<div class="fb-like" data-href="http://www.facebook.com/pages/Odontovital/147699088730906?skip_nax_wizard=true" data-send="true" data-width="250" data-show-faces="true"></div>
		</div>
		<div id="twitter">
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="enilamenin" data-hashtags="odontovital">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div id="tooth"></div>
		<div id="odonto">
			The Ondovital is a company fully prepared to better serve you.
		</div>
		<div id="info">
			<div id="title">
				Contact: 
				<div id="contact">
					odontovital@odontovital.com.br <br/>
					(49) 0000-0000
				</div>
			</div>
			<div id="title">
				Address:
				<div id="contact">
					Chapec�-SC
				</div>
			</div>
		</div>
		
	</div>';
	bottom();
?>