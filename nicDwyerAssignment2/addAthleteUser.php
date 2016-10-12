<?php	
	//Insert athlete records using a prepared statement
	try
	{
		include 'connect.php';
		
		$stmt = $pdo->prepare("INSERT INTO tblAthlete2(lastName, firstName, gender, image, sport, countryId) VALUES(:lastName, :firstName, :gender, :image, :sport, :countryId)");
		$stmt->bindParam(':lastName', $lastName);
		$stmt->bindParam(':firstName', $firstName);
		$stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':image', $image);
		$stmt->bindParam(':sport', $sport);
		$stmt->bindParam(':countryId', $countryId);
		
		$lastName = '$_POST["lastName"]';
		$firstName = '$_POST["firstName"]';
		$gender = '$_POST["gender"]';
		$image = '$_POST["image"]';
		$sport = '$_POST["sport"]';
		$countryId = '$_POST["countryId"]';
		$stmt->execute();
		
		echo("Athlete successfully added");
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo("<form action ='$self' method='POST'> ");
		echo('<input type="submit" name="pageSelect" value="Display Athletes">');
		echo("</form>");
	}
	catch(PDOException $e)
	{
		echo($_POST["countryId"]);
		$error = "Inserting athlete data failed";
		include "error.html.php";
		exit();
	}
?>