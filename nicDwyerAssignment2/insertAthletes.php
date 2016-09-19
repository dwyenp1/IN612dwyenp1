<?php	
	//Insert athlete records using a prepared statement
	try
	{
		$stmt = $pdo->prepare("INSERT INTO tblAthlete2(lastName, firstName, gender, image, sport, countryId) VALUES(:lastName, :firstName, :gender, :image, :sport, :countryId)");
		$stmt->bindParam(':lastName', $lastName);
		$stmt->bindParam(':firstName', $firstName);
		$stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':image', $image);
		$stmt->bindParam(':sport', $sport);
		$stmt->bindParam(':countryId', $countryId);
		
		$lastName = 'Phelps';
		$firstName = 'Michael';
		$gender = 'm';
		$image = 'images/athletes/Phelps.jpg';
		$sport = 'Swimming';
		$countryId = '1';
		$stmt->execute();
		
		$lastName = 'Ledecky';
		$firstName = 'Katie';
		$gender = 'f';
		$image = 'images/athletes/Ledecky.jpg';
		$sport = 'Swimming';
		$countryId = '1';
		$stmt->execute();
		
		$lastName = 'Biles';
		$firstName = 'Simone';
		$gender = 'f';
		$image = 'images/athletes/Biles.jpg';
		$sport = 'Gymnastics';
		$countryId = '1';
		$stmt->execute();
		
		$lastName = 'Hosszu';
		$firstName = 'Katinka';
		$gender = 'f';
		$image = 'images/athletes/hosszu.jpg';
		$sport = 'Swimming';
		$countryId = '2';
		$stmt->execute();
		
		$lastName = 'Bolt';
		$firstName = 'Usain';
		$gender = 'm';
		$image = 'images/athletes/Bolt.jpg';
		$sport = 'Athletics';
		$countryId = '3';
		$stmt->execute();
		
		$lastName = 'Kenny';
		$firstName = 'Jason';
		$gender = 'm';
		$image = 'images/athletes/Kenny.jpg';
		$sport = 'Cycling';
		$countryId = '4';
		$stmt->execute();
		
		$lastName = 'Danuta';
		$firstName = 'Kozak';
		$gender = 'f';
		$image = 'images/athletes/Danuta.jpg';
		$sport = 'Canoeing';
		$countryId = '2';
		$stmt->execute();
		
		$lastName = 'Murphy';
		$firstName = 'Ryan';
		$gender = 'm';
		$image = 'images/athletes/Murphy.jpg';
		$sport = 'Swimming';
		$countryId = '5';
		$stmt->execute();
		
		$lastName = 'Manuel';
		$firstName = 'Simone';
		$gender = 'f';
		$image = 'images/athletes/Manuel.jpg';
		$sport = 'Swimming';
		$countryId = '1';
		$stmt->execute();
		
		$lastName = 'Dirado';
		$firstName = 'Maya';
		$gender = 'f';
		$image = 'images/athletes/Dirado.jpg';
		$sport = 'Swimming';
		$countryId = '1';
		$stmt->execute();
		
		$lastName = 'van Niekirk';
		$firstName = 'Wayde';
		$gender = 'm';
		$image = 'images/athletes/vanNiekirk.jpg';
		$sport = 'Athletics';
		$countryId = '6';
		$stmt->execute();
		
		$lastName = 'Ayana';
		$firstName = 'Almaz';
		$gender = 'f';
		$image = 'images/athletes/Ayana.jpg';
		$sport = 'Athletics';
		$countryId = '7';
		$stmt->execute();
		
		$lastName = 'Wlodarczyk';
		$firstName = 'Anita';
		$gender = 'f';
		$image = 'images/athletes/Wlodarczyk.jpg';
		$sport = 'Athletics';
		$countryId = '8';
		$stmt->execute();
		
		$lastName = 'Long';
		$firstName = 'Qingquan';
		$gender = 'm';
		$image = 'images/athletes/Long.jpg';
		$sport = 'Weightlifting';
		$countryId = '9';
		$stmt->execute();
		
		$lastName = 'Mann';
		$firstName = 'Hugh';
		$gender = 'm';
		$image = 'images/athletes/Mann.jpg';
		$sport = 'Canoeing';
		$countryId = '5';
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		$error = "Inserting athlete data failed";
		include "error.html.php";
		exit();
	}
?>