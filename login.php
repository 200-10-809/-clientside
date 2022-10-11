<?php
require('top.inc.php');
?>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/login.css">
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-2">
				<div class="form-container" style="height:523px">
					<div class="form-btn">
						<span onclick="login()">LOGIN</span>
						<span onclick="Reg()">REGISTER</span>
					</div>
					<div>
					<form  id="LoginForm" class="lfrom" method="POST" style="padding:0 50px; top:100px;">
						<div>
							<input type="text" name="lemail" id="lemail" placeholder="Enter Email">
						</div>
						<div class="field_error" id="lemail_error"></div>
						<div>
							<input type="password" name="lpassword" id="lpassword" placeholder="Enter Password">
						</div>
						<div class="field_error" id="lpassword_error"></div>
						<button type="button"  onclick="login_user()"class="btn">Login</button>
						<div class="form-output login_msg"style="margin-top: 30px;"><p class="form-message field_error" ></p></div>
					</form>
					
					</div>
				<div>
					<form id="RegForm" method="POST" class="lfrom" style="padding:0 50px; top:100px;">
						<div>
							<input type="text" name="name"   id="name" placeholder="Enter name">
						</div>
						<div class="field_error" id="name_error"></div>
						<div>
							<input type="text" name="email"  id="email" placeholder="Enter Email">
						</div>
						<div class="field_error" id="email_error"></div>
						<div>
							<input type="text" name="mobile" id="mobile"  placeholder="Enter Mobile">
						</div>
						<div class="field_error" id="mobile_error"></div>
						<div>
							<input type="password"  name="password" id="password" placeholder="Enter Password">
						</div>
						<div class="field_error" id="password_error"></div>
						<button type="button" class="btn" onclick="user_register()" name="submit">Register</input>
					</form>
					<div class="form-output register_msg"style="margin-top: 30px;"><p class="form-message"></p></div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.inc.php');

?>

<!-- JS for toggle form -->

<script>
	var LoginForm =document.getElementById("LoginForm");
	var RegForm =document.getElementById("RegForm");
	var Indicator=document.getElementById("Indicator");

	function Reg() {
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}
	function login() {
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(300px)";
	}
</script>

