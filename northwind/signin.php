<?php
if(isset($_POST['submit'])) {
	$conn = new mysqli(
		'db403-mysql', 'root', 'P@ssw0rd', 'northwind'
	);
	if($conn->connect_errno) {
		die($conn->connect_error);
	}
	echo 'Connected';
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Northwind - Sign up/Sign in</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="signin.php" method="post" onsubmit="return checkPassword();">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="fname" placeholder="First name" required>
					<input type="text" name="lname" placeholder="Last name" required>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" id="pass1" name="pswd" placeholder="Password" required>
					<input type="password" id="pass2" placeholder="Confirm Password" required>
					<button type="submit" name="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
	<script>
		function checkPassword() {
			const pass1 = document.getElementById('pass1').value;
			const pass2 = document.getElementById('pass2').value;
			if(pass1 == pass2) {
				return true;
			}
			else {
				alert('Passwords are not identical!');
				return false;
			}
		}
	</script>
</body>
</html>