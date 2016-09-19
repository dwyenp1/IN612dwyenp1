<?php
	include "connect.php";
	
	//Set up the event/athlete tables with a foreign key
	try
	{
		//Change athlete table to a better name after renaming athlete table in Assignment 1 project
		$dropQuery = "DROP TABLE IF EXISTS tblAthlete2";
		$pdo->exec($dropQuery);
		$dropQuery = "DROP TABLE IF EXISTS tblCountry";
		$pdo->exec($dropQuery);
		
		//Create Event table
		$createQuery ="CREATE TABLE tblCountry
		(
			iD			INT(6) NOT NULL AUTO_INCREMENT,
			name		VARCHAR(50) NOT NULL,
			population	INT(12),
			flagImage 	VARCHAR(500) NOT NULL,
			
			PRIMARY KEY(iD)
		)";
		$pdo->exec($createQuery);
		
		//Create Athlete table
		$createQuery ="CREATE TABLE tblAthlete2
		(
			iD			INT(6) NOT NULL AUTO_INCREMENT,
			lastName	VARCHAR(20) NOT NULL,
			firstName	VARCHAR(20) NOT NULL,
			gender		VARCHAR(1) NOT NULL,
			image		VARCHAR(500) NOT NULL,
			sport		VARCHAR(50)	NOT NULL,
			countryId	INT(6) NOT NULL,
			
			PRIMARY KEY(iD),
			FOREIGN KEY (countryId) REFERENCES tblCountry(iD)
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
	
	include "insertCountries.php";
	include "insertAthletes.php";
?>