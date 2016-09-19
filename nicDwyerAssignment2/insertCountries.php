<?php
	//Insert country records using a prepared statement
	try
	{
		$stmt = $pdo->prepare("INSERT INTO tblCountry(name, population, flagImage) VALUES(:name, :population, :flagImage)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':population', $population);
		$stmt->bindParam(':flagImage', $flagImage);
		
		$name = 'USA';
		$population = '318900000';
		$flagImage = 'images/flags/usa.jpg';
		$stmt->execute();
		
		$name = 'Hungary';
		$population = '9897000';
		$flagImage = 'images/flags/hungary.jpg';
		$stmt->execute();
		
		$name = 'Jamaica';
		$population = '2715000';
		$flagImage = 'images/flags/jamaica.jpg';
		$stmt->execute();
		
		$name = 'UK';
		$population = '64100000';
		$flagImage = 'images/flags/uk.jpg';
		$stmt->execute();
		
		$name = 'Australia';
		$population = '23130000';
		$flagImage = 'images/flags/australia.jpg';
		$stmt->execute();
		
		$name = 'South Africa';
		$population = '52980000';
		$flagImage = 'images/flags/southafrica.jpg';
		$stmt->execute();
		
		$name = 'Ethiopia';
		$population = '94100000';
		$flagImage = 'images/flags/ethiopia.jpg';
		$stmt->execute();
		
		$name = 'Poland';
		$population = '38530000';
		$flagImage = 'images/flags/poland.jpg';
		$stmt->execute();
		
		$name = 'China';
		$population = '1357000000';
		$flagImage = 'images/flags/china.jpg';
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		$error = "Inserting country data failed";
		include "error.html.php";
		exit();
	}
?>