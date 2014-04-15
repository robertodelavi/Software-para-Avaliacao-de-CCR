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
				<div id="login">
					<div id="title_login">
						&nbsp&nbsp&nbspCreate an Account
					</div>
					<div id="form_signup">';
					if (isset($_GET['error_cpf']) && $_GET['error_cpf'] == 1){
						echo '<div id="message_signup_type" style="color:red">*This CPF already exists in our database</div>';
					}
					if (isset($_GET['error_username']) && $_GET['error_username'] == 1){
						echo '<div id="message_signup_type" style="color:red">*This username already registered</div>';
					}
						echo'<div id="message_signup"> <br/>Please, create your account to continue.</div>
						<div id="message_signup_type"> <br/>Personal information:</div>
						<form action="registering.php" method="POST" onSubmit="return test()">
							<label class="loginDescr">*Name:</label><input type="text" name="name" class="loginField" value="'.@$_SESSION['name'].'"/>
							<div id="message_error1"> *The name is required</div>
							<label class="loginDescr">*Last name:</label><input type="text" name="last_name" class="loginField" value="'.@$_SESSION['last_name'].'"/>
							<div id="message_error2"> *The last name is required</div>
							<label class="loginDescr">*Email:</label><input type="email" name="email" class="loginField" value="'.@$_SESSION['email'].'"/>
							<div id="message_error3"> *The e-mail is required</div>
							<label class="loginDescr">*Phone 1:</label><input type="text" name="phone" class="loginField" value="'.@$_SESSION['phone'].'"/>
							<div id="message_error4"> *The phone is required</div>
							<label class="loginDescr">Phone 2:</label><input type="text" name="phone2" class="loginField" value="'.@$_SESSION['phone2'].'"/>
							<label class="loginDescr">*Birth date:</label><input type="date" name="birth_date" class="loginField" value="'.@$_SESSION['birth_date'].'"/>
							<div id="message_error5"> *The birth date is required</div>
							<label class="loginDescr">*RG:</label><input type="text" name="rg" class="loginField" value="'.@$_SESSION['rg'].'"/>
							<div id="message_error6"> *The RG is required</div>
							<label class="loginDescr">*CPF:</label><input type="text" name="cpf" class="loginField" value="'.@$_SESSION['cpf'].'"/>
							<div id="message_error7"> *The CPF is required</div>
							<label class="loginDescr">*Blood type:</label><input type="text" name="blood_type" class="loginField" value="'.@$_SESSION['btype'].'"/>
							<div id="message_error8"> *The blood type is required</div>
							<label class="loginDescr">*Sex:</label>
							<div class="radioField"><input id="female" type="radio" name="sex" value="Female"/>Female<br/>
							<input id="male" type="radio" name="sex" value="Male"/>Male</div>';
							echo '<div id="message_error16"> *Complete the sex correctly</div>
							<div id="message_signup_type"> <br/>Address information:</div>
							<label class="loginDescr">*State:</label>';
							$result = mysql_query('SELECT * FROM state');
							echo '<div><select class="loginField" name="dropdown">';
							if (mysql_num_rows($result) > 0){
								while ($state = mysql_fetch_assoc($result)){
									echo '<option value="'.$state['symbol'].'">'.$state['symbol'].'</option>';
								}
							}
							echo '</select></div>';
							echo '<label class="loginDescr">*City:</label><input type="text" name="city" class="loginField" value="'.@$_SESSION['city'].'"/>
							<div id="message_error10"> *The city is required</div>
							<label class="loginDescr">*CEP:</label><input type="text" name="cep" class="loginField" value="'.@$_SESSION['cep'].'"/>
							<div id="message_error11"> *The CEP is required</div>
							<label class="loginDescr">*Neighborhood:</label><input type="text" name="neighborhood" class="loginField" value="'.@$_SESSION['nbhood'].'"/>
							<div id="message_error12"> *The neighborhood is required</div>
							<label class="loginDescr">*Address:</label><input type="text" name="address" class="loginField" value="'.@$_SESSION['address'].'"/>
							<div id="message_error13"> *The address is required</div>
							<label class="loginDescr">Number:</label><input type="text" name="number" class="loginField" value="'.@$_SESSION['number'].'"/>
							<label class="loginDescr">Complement:</label><input type="text" name="complement" class="loginField" value="'.@$_SESSION['complement'].'"/>
							<div id="message_signup_type"> <br/>Information access:</div>
							<label class="loginDescr">*Username:</label><input type="text" name="username" class="loginField" value="'.@$_SESSION['username'].'"/>
							<div id="message_error14"> *The username is required</div>
							<label class="loginDescr">*Password:</label><input type="password" name="password" class="loginField" value="'.@$_SESSION['password'].'"/>
							<div id="message_error15"> *The password is required</div>
							<button type="submit" name="submit" value="submit" id="button_login">Sign Up</button>
							<div id="signup_link">or &nbsp <a class = "optionLink" href="login.php">Login</a></div>
						</form>
					</div>
				</div>
	
	</div><<div id="footer">
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