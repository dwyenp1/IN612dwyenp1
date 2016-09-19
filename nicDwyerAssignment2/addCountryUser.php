<?php
	//Insert country record using a prepared statement
	try
	{
		include 'connect.php';
		
		$stmt = $pdo->prepare("INSERT INTO tblCountry(name, population, flagImage) VALUES(:name, :population, :flagImage)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':population', $population);
		$stmt->bindParam(':flagImage', $flagImage);
		
		$name = $_POST['name'];
		$population = $_POST['population'];
		$flagImage = $_POST['flagImage'];
		$stmt->execute();
		
		echo("Country successfully added");
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo("<form action ='$self' method='POST'> ");
		echo('<input type="submit" name="pageSelect" value="Display Countries">');
		echo("</form>");
	}
	catch(PDOException $e)
	{
		$error = "Inserting country data failed";
		include "error.html.php";
		exit();
	}
?>