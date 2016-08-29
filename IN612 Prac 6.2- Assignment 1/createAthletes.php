<?php
	include "connect.php";
	
	try
	{
		//Create Event table
		$dropQuery = "DROP TABLE IF EXISTS tblAthlete";
		$pdo->exec($dropQuery);
		$dropQuery = "DROP TABLE IF EXISTS tblEvent";
		$pdo->exec($dropQuery);	
		
		$createQuery ="CREATE TABLE tblEvent
		(
			iD		INT(6) NOT NULL AUTO_INCREMENT,
			sport	VARCHAR(50) NOT NULL,
			event	VARCHAR(50) NOT NULL,
			
			PRIMARY KEY(iD)
		)";
		$pdo->exec($createQuery);
		
		//Create Athlete table
		$createQuery ="CREATE TABLE tblAthlete
		(
			iD			INT(6) NOT NULL AUTO_INCREMENT,
			lastName	VARCHAR(20) NOT NULL,
			firstName	VARCHAR(20) NOT NULL,
			gender		VARCHAR(1) NOT NULL,
			image		VARCHAR(500) NOT NULL,
			medal		VARCHAR(6)	NOT NULL,
			eventId		INT(6) NOT NULL,
			
			PRIMARY KEY(ID),
			FOREIGN KEY (eventId) REFERENCES tblEvent(iD)
				ON DELETE CASCADE
		)";
		$pdo->exec($createQuery);
		
		
	}
	catch(PDOException $e)
	{
		$error = "Creating the table failed";
		include "error.html.php";
		exit();
	}
	
	include "insertEvents.php";
	
	include "insertAthletes.php";
	
	//Select all records
	try
	{
		$selectString = "SELECT * FROM tblEvent";
		$result = $pdo->query($selectString);
		$selectString = "SELECT * FROM tblAthlete";
		$result2 = $pdo->query($selectString);
	}
	catch(PDOException $e)
	{
		$error = "Select statement error";
		include "error.html.php";
		exit();
	}
	
	include "output.html.php";
?>