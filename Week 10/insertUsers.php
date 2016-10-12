<?php
	//Insert user login information using a prepared statement
	try
	{	
		function hash_and_salt($name, $password, $pdo)
		{
			//A higher "cost" is more secure but consumes more processing power
			$cost = 10;
			
			//Create a random salt
			$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
			
			//Prefix information about the hash so PHP knows how to verify it later
			//"$2a$" means we're using the Blowfish algorithm. The following two digits are the cost parameter.
			$salt = sprintf("$2a$%02d$", $cost) . $salt;
			echo("$salt <br>");
			
			//Hash the password with salt
			$hash = crypt($password, $salt);
			echo("$hash <br>");
			
			$userName = $name;
			$userPassword = $hash;
			
			$stmt = $pdo->prepare("INSERT INTO tblUserLogin(userName, userPassword) VALUES(:userName, :userPassword)");
			$stmt->bindParam(':userName', $userName);
			$stmt->bindParam(':userPassword', $userPassword);
					
			$stmt->execute();		
		}
		
		hash_and_salt("nic", "nic", $pdo);
		hash_and_salt("a", "a", $pdo);
		hash_and_salt("nic", "nic", $pdo);
	}
	catch(PDOException $e)
	{
		$error = "Inserting user data failed";
		include "error.html.php";
		exit();
	}
?>