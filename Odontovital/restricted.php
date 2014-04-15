<?php
echo '<!DOCTYPE html>';
	session_start();
	require_once('library.php');
	
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
			
	if (!isset($_SESSION['admin'])){
		echo '<div id="title_login">
				&nbsp&nbsp&nbspLogin to Restricted Area
				</div>
				<div id="form_login">';
		if(isset($_GET['password'])){
			echo '<div id="message_signup_type" style="color:red">User and/or password incorrect.</div>';
		}
		echo '<div id="login">
				<form action="login_adm.php" method="POST">
					<label class="loginDescr">Username:</label><input type="text" name="username" class="loginField" value="'.@$_SESSION['admin'].'"/>
					<label class="loginDescr">Password:</label><input type="password" name="password" class="loginField" value=""/>
					<div id="message_login"> Please enter admin\'s email and password</div>
					<button type="submit" name="submit" value="submit" id="button_login">Login</button>
				</form>
			</div>
		</div>';
	}else{
		if (isset($_SESSION['admin'])){
			echo '<div id="menu"> 
			<ul>
				<li><a href="register.php"><span>Professional Register</span></a></li> 
				<li><a href="register_treatments.php"><span>Treatments Register</span></a></li> 
				<li><a href="relate.php"><span>Relate Treatments to Patients</span></a></li> 
				<li><a href="list.php"><span>List of Patients and Treatments</span></a></li> 
				<li><a href="table.php"><span>Treatments</span></a></li> 
				<li><a href="logout.php"><span>Exit</span></a></li> 
			</ul>
			</div>';
		}
	}
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
					Chapecó-SC
				</div>
			</div>
		</div>
		
	</div>';
	bottom();
?>