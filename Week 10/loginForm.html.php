<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
	<title>Login</title>
	<meta charset="utf-8" />
</style>
</head>
<body>  

<div class="container">
	<?php
		include "connect.php";
		// define variables and set to empty values
		$username = $password = "";
		$usernameErr = $passwordErr = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["username"])) {
			$usernameErr = "username is required";
		  } else {
			$name = test_input($_POST["username"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
			  $usernameErr = "Only letters and white space allowed";
			}
		  }

		  if (empty($_POST["password"])) {
			$passwordErr = "password is required";
		  } else {
			$password = test_input($_POST["password"]);
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<h2>User Login</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Username: <input type="text" name="username" value="<?php echo $username;?>">
	  <span class="error">* <?php echo $usernameErr;?></span>
	  <br><br>
	  Password: <input type="password" name="password" value="<?php echo $password;?>">
	  <span class="error">* <?php echo $passwordErr;?></span>
	  <br><br>

	  <input type="submit" name="userLogin" value="login">
	</form>

</div>
</body>
</html>