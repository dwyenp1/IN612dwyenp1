<?php	
	//Insert athlete records using a prepared statement
	try
	{
		$stmt = $pdo->prepare("INSERT INTO tblAthlete(lastName, firstName, gender, image, medal, eventId) VALUES(:lastName, :firstName, :gender, :image, :medal, :eventId)");
		$stmt->bindParam(':lastName', $lastName);
		$stmt->bindParam(':firstName', $firstName);
		$stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':image', $image);
		$stmt->bindParam(':medal', $medal);
		$stmt->bindParam(':eventId', $eventId);
		
		$lastName = 'Carrington';
		$firstName = 'Lisa';
		$gender = 'f';
		$image = 'photos/Carrington.jpg';
		$medal = 'gold';
		$eventId = '1';
		$stmt->execute();
		
		$lastName = 'Drysdale';
		$firstName = 'Mahe';
		$gender = 'm';
		$image = 'photos/Drysdale.jpg';
		$medal = 'gold';
		$eventId = '2';
		$stmt->execute();
		
		$lastName = 'Bond';
		$firstName = 'Hamish';
		$gender = 'm';
		$image = 'photos/Bond.jpg';
		$medal = 'gold';
		$eventId = '3';
		$stmt->execute();
		
		$lastName = 'Murray';
		$firstName = 'Eric';
		$gender = 'm';
		$image = 'photos/Murray.jpg';
		$medal = 'gold';
		$eventId = '3';
		$stmt->execute();
		
		$lastName = 'Burling';
		$firstName = 'Peter';
		$gender = 'm';
		$image = 'photos/Burling.jpg';
		$medal = 'gold';
		$eventId = '4';
		$stmt->execute();
		
		$lastName = 'Tuke';
		$firstName = 'Blair';
		$gender = 'm';
		$image = 'photos/Tuke.jpg';
		$medal = 'gold';
		$eventId = '4';
		$stmt->execute();
		
		$lastName = 'Nathan-Wong';
		$firstName = 'Tyla';
		$gender = 'f';
		$image = 'photos/Wong.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Brazier';
		$firstName = 'Kelly';
		$gender = 'f';
		$image = 'photos/Brazier.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Woodman';
		$firstName = 'Portia';
		$gender = 'f';
		$image = 'photos/Woodman.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'McAlister';
		$firstName = 'Kayla';
		$gender = 'f';
		$image = 'photos/Mcalister.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Tui';
		$firstName = 'Ruby';
		$gender = 'f';
		$image = 'photos/Tui.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Goss';
		$firstName = 'Sarah';
		$gender = 'f';
		$image = 'photos/Goss.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Manuel';
		$firstName = 'Huriana';
		$gender = 'f';
		$image = 'photos/Manuel.jpg';
		$medal = 'silver';
		$eventId = '5';
		$stmt->execute();
		
		$lastName = 'Behrent';
		$firstName = 'Genevieve';
		$gender = 'f';
		$image = 'photos/Behrent.jpg';
		$medal = 'silver';
		$eventId = '6';
		$stmt->execute();
		
		$lastName = 'Scown';
		$firstName = 'Rebecca';
		$gender = 'f';
		$image = 'photos/Scown.jpg';
		$medal = 'silver';
		$eventId = '6';
		$stmt->execute();
		
		$lastName = 'Adams';
		$firstName = 'Valerie';
		$gender = 'f';
		$image = 'photos/Adams.jpg';
		$medal = 'silver';
		$eventId = '7';
		$stmt->execute();
		
		$lastName = 'Rooney';
		$firstName = 'Natalie';
		$gender = 'f';
		$image = 'photos/Rooney.jpg';
		$medal = 'silver';
		$eventId = '8';
		$stmt->execute();
		
		$lastName = 'Jones';
		$firstName = 'Luuka';
		$gender = 'f';
		$image = 'photos/Jones.jpg';
		$medal = 'silver';
		$eventId = '9';
		$stmt->execute();
		
		$lastName = 'Dawkins';
		$firstName = 'Eddie';
		$gender = 'm';
		$image = 'photos/Dawkins.jpg';
		$medal = 'silver';
		$eventId = '10';
		$stmt->execute();
		
		$lastName = 'Webster';
		$firstName = 'Sam';
		$gender = 'm';
		$image = 'photos/Webster.jpg';
		$medal = 'silver';
		$eventId = '10';
		$stmt->execute();
		
		$lastName = 'Mitchell';
		$firstName = 'Ethan';
		$gender = 'm';
		$image = 'photos/Mitchell.jpg';
		$medal = 'silver';
		$eventId = '10';
		$stmt->execute();
		
		$lastName = 'Meech';
		$firstName = 'Sam';
		$gender = 'm';
		$image = 'photos/Meech.jpg';
		$medal = 'bronze';
		$eventId = '11';
		$stmt->execute();
		
		$lastName = 'Aleh';
		$firstName = 'Jo';
		$gender = 'f';
		$image = 'photos/Aleh.jpg';
		$medal = 'silver';
		$eventId = '12';
		$stmt->execute();
		
		$lastName = 'Powrie';
		$firstName = 'Polly';
		$gender = 'f';
		$image = 'photos/Powrie.jpg';
		$medal = 'silver';
		$eventId = '12';
		$stmt->execute();
		
		$lastName = 'Maloney';
		$firstName = 'Alex';
		$gender = 'f';
		$image = 'photos/Maloney.jpg';
		$medal = 'silver';
		$eventId = '13';
		$stmt->execute();
		
		$lastName = 'Meech';
		$firstName = 'Molly';
		$gender = 'f';
		$image = 'photos/MeechMolly.jpg';
		$medal = 'silver';
		$eventId = '13';
		$stmt->execute();
		
		$lastName = 'Ko';
		$firstName = 'Lydia';
		$gender = 'f';
		$image = 'photos/Ko.jpg';
		$medal = 'silver';
		$eventId = '14';
		$stmt->execute();
		
		$lastName = 'Carrington';
		$firstName = 'Lisa';
		$gender = 'f';
		$image = 'photos/Carrington.jpg';
		$medal = 'bronze';
		$eventId = '15';
		$stmt->execute();
		
		$lastName = 'Walsh';
		$firstName = 'Tomas';
		$gender = 'm';
		$image = 'photos/Walsh.jpg';
		$medal = 'bronze';
		$eventId = '16';
		$stmt->execute();
		
		$lastName = 'McCartney';
		$firstName = 'Eliza';
		$gender = 'f';
		$image = 'photos/Mccartney.jpg';
		$medal = 'bronze';
		$eventId = '17';
		$stmt->execute();
		
		$lastName = 'Willis';
		$firstName = 'Nick';
		$gender = 'm';
		$image = 'photos/Willis.jpg';
		$medal = 'bronze';
		$eventId = '18';
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		$error = "Inserting athlete data failed";
		include "error.html.php";
		exit();
	}
?>