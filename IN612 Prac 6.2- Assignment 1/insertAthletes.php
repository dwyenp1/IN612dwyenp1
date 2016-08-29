<?php	
	//Insert athlete records
	try
	{
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Carrington', 'Lisa', 'f', 'photos/Carrington.jpg', 'gold', '1')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Drysdale', 'Mahe', 'm', 'photos/Drysdale.jpg', 'gold', '2')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Bond', 'Hamish', 'm', 'photos/Bond.jpg', 'gold', '3')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Murray', 'Eric', 'm', 'photos/Murray.jpg', 'gold', '3')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Burling', 'Peter', 'm', 'photos/Burling.jpg', 'gold', '4')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES('Tuke', 'Blair', 'm', 'photos/Tuke.jpg', 'gold', '4')";
		$pdo->exec($insertQuery);
	}
	catch(PDOException $e)
	{
		$error = "Inserting athlete data failed";
		include "error.html.php";
		exit();
	}
?>