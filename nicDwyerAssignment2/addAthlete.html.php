<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
	<title>Table Output</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
</style>
</head>
<body>  

<div class="container">
	<?php
		include "connect.php";
		// define variables and set to empty values
		
		$lastNameErr = $firstNameErr = $genderErr = $imageErr = $sportErr = $countryIdErr = "";
		$lastName = $firstName = $gender = $image = $sport = $countryId = "";
		
		//Remember to check for valid values

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["lastName"])) {
			$lastNameErr = "last name is required";
		  } else {
			$lastName = test_input($_POST["lastName"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
			  $lastNameErr = "Only letters and white space allowed";
			}
		  }
		  
		  if (empty($_POST["firstName"])) {
			$firstNameErr = "first name is required";
		  } else {
			$firstName = test_input($_POST["firstName"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
			  $firstNameErr = "Only letters and white space allowed";
			}
		  }
			
		//Make gender a radio button
		  if (empty($_POST["gender"])) {
			$genderErr = "gender is required";
		  } else {
			$gender = test_input($_POST["gender"]);
		  }
		  
		  if (empty($_POST["image"])) {
			$imageErr = "image is required";
		  } else {
			$image = test_input($_POST["image"]);
		  }
		  
		  if (empty($_POST["sport"])) {
			$sportErr = "sport is required";
		  } else {
			$sport = test_input($_POST["sport"]);
		  }
		  
		  if (empty($_POST["countryId"])) {
			$countryIdErr = "countryId is required";
		  } else {
			$countryId = test_input($_POST["countryId"]);
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<h2>Add Country</h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Last Name: <input type="text" name="lastName" value="<?php echo $lastName;?>">
	  <span class="error">* <?php echo $lastNameErr;?></span>
	  <br><br>
	  First Name: <input type="text" name="firstName" value="<?php echo $firstName;?>">
	  <span class="error">* <?php echo $firstNameErr;?></span>
	  <br><br>
	  Gender: <input type="text" name="gender" value="<?php echo $gender;?>">
	  <span class="error">* <?php echo $genderErr;?></span>
	  <br><br>
	  Image: <input type="text" name="image" value="<?php echo $image;?>">
	  <span class="error">* <?php echo $imageErr;?></span>
	  <br><br>
	  Sport: <input type="text" name="sport" value="<?php echo $sport;?>">
	  <span class="error">* <?php echo $sportErr;?></span>
	  <br><br>
	  Country ID: <input type="text" name="countryId" value="<?php echo $countryId;?>">
	  <span class="error">* <?php echo $countryIdErr;?></span>
	  <br><br>

	  <input type="submit" name="athlete" value="Add">  
	</form>

</div>
</body>
</html>