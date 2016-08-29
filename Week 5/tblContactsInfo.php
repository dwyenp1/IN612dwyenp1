<?php
	include "connect.php";
	
	//Create the table
	try
	{
		$dropQuery = "DROP TABLE IF EXISTS tblContactsInfo";
		$pdo->exec($dropQuery);
		
		$createQuery ="CREATE TABLE tblContactsInfo
		(
			ID		INT(6) NOT NULL AUTO_INCREMENT,
			Name	VARCHAR(20) NOT NULL,
			Phone	VARCHAR(20) NOT NULL,
			
			PRIMARY KEY(ID)
		)";
		$pdo->exec($createQuery);
	}
	catch(PDOException $e)
	{
		$error = "Creating the table failed";
		include "error.html.php";
		exit();
	}
	
	//Insert records
	try
	{
		$insertQuery = "INSERT INTO tblContactsInfo(Name, Phone) VALUES('Harry', '02711111111')";
		$pdo->exec($insertQuery);
		
		$insertQuery = "INSERT INTO tblContactsInfo(Name, Phone) VALUES('Ron', '02722222222')";
		$pdo->exec($insertQuery);
		
		$insertQuery = "INSERT INTO tblContactsInfo(Name, Phone) VALUES('Hermione', '02733333333')";
		$pdo->exec($insertQuery);
	}
	catch(PDOException $e)
	{
		$error = "Inserting data failed";
		include "error.html.php";
		exit();
	}
	
	//Select all records
	try
	{
		$selectString = "SELECT * FROM tblContactsInfo";
		$result = $pdo->query($selectString);
	}
	catch(PDOException $e)
	{
		$error = "Select statement error";
		include "error.html.php";
		exit();
	}
	
	//Select all records where Name ends in 'y'
	try
	{
		$selectString = "SELECT * FROM tblContactsInfo WHERE Name LIKE '%y'";
		$result2 = $pdo->query($selectString);
	}
	catch(PDOException $e)
	{
		$error = "Select statement error";
		include "error.html.php";
		exit();
	}
	
	//Show columns of the table
	try
	{
		$selectString = "SHOW COLUMNS FROM tblContactsInfo";
		$result3 = $pdo->query($selectString);
	}
	catch(PDOException $e)
	{
		$error = "Show columns error";
		include "error.html.php";
		exit();
	}
	
	include "output.html.php";
?>