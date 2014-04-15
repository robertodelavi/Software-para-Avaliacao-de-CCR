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
			<div id="background-form-update">';
			if (isset($_GET['sucess']) && $_GET['sucess'] == 1){
				echo '<div id="message_signup_type"> <br/><a class="optionLink" href="register.php?sucess=0">Register other professional</a>&nbsp&nbsp&nbsp or &nbsp&nbsp&nbsp<a class="optionLink" href="restricted.php">Go to Restricted Area</a></div>';
			}else{
				echo '<div id="message_signup_type"> <br/>Personal information:</div>
					<form action="saving.php" method="POST" onSubmit="return test_register()">
						<label class="loginDescr">*Name:</label><input type="text" name="name" class="loginField" value="'.@$_SESSION['name'].'"/>
						<div id="error1"> *The name is required</div>
						<label class="loginDescr">*Last name:</label><input type="text" name="last_name" class="loginField" value="'.@$_SESSION['last_name'].'"/>
						<div id="error2"> *The last name is required</div>
						<label class="loginDescr">*Email:</label><input type="email" name="email" class="loginField" value="'.@$_SESSION['email'].'"/>
						<div id="error3"> *The e-mail is required</div>
						<label class="loginDescr">*Phone 1:</label><input type="text" name="phone" class="loginField" value="'.@$_SESSION['phone'].'"/>
						<div id="error4"> *The phone is required</div>
						<label class="loginDescr">Phone 2:</label><input type="text" name="phone2" class="loginField" value="'.@$_SESSION['phone2'].'"/>
						<label class="loginDescr">*RG:</label><input type="text" name="rg" class="loginField" value="'.@$_SESSION['rg'].'"/>
						<div id="error5"> *The RG is required</div>
						<label class="loginDescr">*CPF:</label><input type="text" name="cpf" class="loginField" value="'.@$_SESSION['cpf'].'"/>
						<div id="error6"> *The CPF is required</div>
						<div id="message_signup_type"> <br/>Professional information:</div>
						<label class="loginDescr">*Formation:</label><input type="text" name="formation" class="loginField" value="'.@$_SESSION['formation'].'"/>
						<div id="error12"> *The formation is required</div>
						<label class="loginDescr">*Speciality:</label><input type="text" name="speciality" class="loginField" value="'.@$_SESSION['speciality'].'"/>
						<div id="error13"> *The speciality is required</div>
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
						echo '<div id="error7"> *The state is required</div>
						<label class="loginDescr">*City:</label><input type="text" name="city" class="loginField" value="'.@$_SESSION['city'].'"/>
						<div id="error8"> *The city is required</div>
						<label class="loginDescr">*CEP:</label><input type="text" name="cep" class="loginField" value="'.@$_SESSION['cep'].'"/>
						<div id="error9"> *The CEP is required</div>
						<label class="loginDescr">*Neighborhood:</label><input type="text" name="neighborhood" class="loginField" value="'.@$_SESSION['nbhood'].'"/>
						<div id="error10"> *The neighborhood is required</div>
						<label class="loginDescr">*Address:</label><input type="text" name="address" class="loginField" value="'.@$_SESSION['address'].'"/>
						<div id="error11"> *The address is required</div>
						<label class="loginDescr">Number:</label><input type="text" name="number" class="loginField" value="'.@$_SESSION['number'].'"/>
						<label class="loginDescr">Complement:</label><input type="text" name="complement" class="loginField" value="'.@$_SESSION['complement'].'"/>
						<button type="submit" name="submit" value="submit" id="button_login">Save</button>
					</form>
				</div>';
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
					Chapecó-SC
				</div>
			</div>
		</div>
		
	</div>';
	bottom();
?>