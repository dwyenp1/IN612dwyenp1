<?php
	include "connect.php";
	
	//Set up the event/athlete tables with a foreign key
	try
	{
		$dropQuery = "DROP TABLE IF EXISTS tblUserLogin";
		$pdo->exec($dropQuery);
		
		//Create User Login table
		$createQuery ="CREATE TABLE tblUserLogin
		(
			userId			INT(6) NOT NULL AUTO_INCREMENT,
			userName		VARCHAR(50) NOT NULL,
			userPassword 	VARCHAR(200) NOT NULL,
			
			UNIQUE KEY(userName),
			PRIMARY KEY(userId)
		)";
		$pdo->exec($createQuery);
	}
	catch(PDOException $e)
	{
		$error = "Creating the table failed";
		include "error.html.php";
		exit();
	}
	
	include "insertUsers.php";
?>