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
			<div id="body_background">
			<div id="welcome"> </div>';
			echo '<div id="menu"> 
			<ul>
				<li><a href="update.php"><span>Update Registration</span></a></li> 
				<li><a href="monitor.php"><span>Monitor Treatment</span></a></li> 
				<li><a href="disable.php" onclick="return disable()"><span>Disable Account</span></a></li> 
			</ul>
			</div>
			<div id="background-form-update">';
			if (isset($_GET['sucess'])){
				echo '<div id="message_signup_type" style="color:red">Update Successfully</div>';
			}
			$result = mysql_query('SELECT * FROM patient WHERE username="'.$_SESSION['username'].'"');
			if (mysql_num_rows($result) > 0){
				$data = mysql_fetch_assoc($result);
			}
			$result = mysql_query('SELECT * FROM patient NATURAL JOIN phone WHERE username="'.$_SESSION['username'].'"');
			$i = 0;
			$array = array();
			if (mysql_num_rows($result) > 0){
				while($phone = mysql_fetch_assoc($result)){
					$array[$i] = $phone['number'];
					$i = $i+1;
				}
			}
			$result = mysql_query('SELECT cod_city, neighborhood, address, number, complement FROM patient NATURAL JOIN address WHERE username="'.$_SESSION['username'].'"');
			if (mysql_num_rows($result) > 0){
				$address = mysql_fetch_assoc($result);
				$cod = $address['cod_city'];
				$city = mysql_query('SELECT name FROM (address JOIN city ON cod_city=cod) WHERE cod="'.$cod	.'"');
				if (mysql_num_rows($city) > 0){
					$namecity = mysql_fetch_assoc($city);
				}
			}
			//ver o problema aqui.
			
			
			echo '<div id="message_signup_type"> <br/>Personal information:</div>
					<form action="updating.php" method="POST">
					<label class="loginDescr">*Name:</label><input type="text" name="name" class="loginField" value="'.@$data['name'].'"/>
					<label class="loginDescr">*Last name:</label><input type="text" name="last_name" class="loginField" value="'.@$data['lastname'].'"/>
					<label class="loginDescr">*Email:</label><input type="email" name="email" class="loginField" value="'.@$data['email'].'"/>
					<label class="loginDescr">*Phone 1:</label><input type="text" name="phone" class="loginField" value="'.@$array[0].'"/>
					<label class="loginDescr">Phone 2:</label><input type="text" name="phone2" class="loginField" value="'.@$array[1].'"/>
					<label class="loginDescr">*Birth date:</label><input type="date" name="birth_date" class="loginField" value="'.@$data['birthdate'].'"/>
					<label class="loginDescr">*RG:</label><input type="text" name="rg" class="loginField" value="'.@$data['rg'].'"/>
					<label class="loginDescr">*CPF:</label><input type="text" name="cpf" class="loginField" value="'.@$data['cpf'].'"/>
					<label class="loginDescr">*Blood type:</label><input type="text" name="blood_type" class="loginField" value="'.@$data['bloodtype'].'"/>
					<label class="loginDescr">*Sex:</label>';
					if (@$data['sex'] == 'Female'){
						echo '<div class="radioField"><input type="radio" name="sex" value="Female" checked/>Female<br/>
							<input type="radio" name="sex" value="Male"/>Male</div>';
					}else{
						echo '<div class="radioField"><input type="radio" name="sex" value="Female"/>Female<br/>
							<input type="radio" name="sex" value="Male" checked/>Male</div>';
					}
					echo '<div id="message_signup_type"> <br/>Address information:</div>
					<label class="loginDescr">*State:</label>';
					$result = mysql_query('SELECT * FROM state');
					$pstate = mysql_query('SELECT * FROM ((patient NATURAL JOIN address a) JOIN city c ON a.cod_city = c.cod) JOIN state s ON c.state=s.symbol WHERE username="'.$_SESSION['username'].'"');
					if (mysql_num_rows($pstate)>0){
						$data = mysql_fetch_assoc($pstate);
						$sp = $data['symbol'];
					}
					echo '<div><select class="loginField" name="dropdown">';
					if (mysql_num_rows($result) > 0){
						while ($state = mysql_fetch_assoc($result)){
							if($state['symbol'] == $sp){
								echo '<option selected value="'.$state['symbol'].'">'.$state['symbol'].'</option>';
							}else{
								echo '<option value="'.$state['symbol'].'">'.$state['symbol'].'</option>';
							}
						}
					}
					echo '</select></div>';
					echo '<label class="loginDescr">*City:</label><input type="text" name="city" class="loginField" value="'.@$namecity['name'].'"/>
					<label class="loginDescr">*CEP:</label><input type="text" name="cep" class="loginField" value="'.@$data['cep'].'"/>
					<label class="loginDescr">*Neighborhood:</label><input type="text" name="neighborhood" class="loginField" value="'.@$address['neighborhood'].'"/>
					<label class="loginDescr">*Address:</label><input type="text" name="address" class="loginField" value="'.@$address['address'].'"/>
					<label class="loginDescr">Number:</label><input type="text" name="number" class="loginField" value="'.@$address['number'].'"/>
					<label class="loginDescr">Complement:</label><input type="text" name="complement" class="loginField" value="'.@$address['complement'].'"/>
					<div id="message_signup_type"> <br/>Information access:</div>
					<label class="loginDescr">*Username:</label><input type="text" name="username" class="loginField" value="'.@$data['username'].'"/>
					<label class="loginDescr">*Password:</label><input type="password" name="password" class="loginField" value=""/>
					<button type="submit" name="submit" value="submit" id="button_login">Save</button>
				</form>';
			
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
					Chapecó-SC
				</div>
			</div>
		</div>
		
	</div>';
	bottom();
?>