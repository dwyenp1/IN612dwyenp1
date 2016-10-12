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
		$nameErr = $populationErr = $flagImageErr = "";
		$name = $population = $flagImage = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		  } else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameErr = "Only letters and white space allowed";
			}
		  }

		  if (empty($_POST["population"])) {
			$populationErr = "population is required";
		  } else {
			$population = test_input($_POST["population"]);
		  }
		  
		  if (empty($_POST["flagImage"])) {
			$flagImageErr = "flag image is required";
		  } else {
			$flagImage = test_input($_POST["flagImage"]);
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
	  Name: <input type="text" name="name" value="<?php echo $name;?>">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	  Population: <input type="text" name="population" value="<?php echo $population;?>">
	  <br><br>
	  Flag: <input type="text" name="flagImage" value="<?php echo $flagImage;?>">
	  <span class="error">* <?php echo $flagImageErr;?></span>
	  <br><br>

	  <input type="submit" name="country" value="Add">  
	</form>

</div>
</body>
</html>