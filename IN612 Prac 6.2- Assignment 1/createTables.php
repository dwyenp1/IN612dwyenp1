<?php
	include "connect.php";
	
	//Set up the event/athlete tables with a foreign key
	try
	{
		$dropQuery = "DROP TABLE IF EXISTS tblAthlete";
		$pdo->exec($dropQuery);
		$dropQuery = "DROP TABLE IF EXISTS tblEvent";
		$pdo->exec($dropQuery);
		
		//Create Event table
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
			
			PRIMARY KEY(iD),
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
?>