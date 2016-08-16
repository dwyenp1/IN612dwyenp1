<?php
	include "connect.php";
	
	try
	{
		$dropQuery = "DROP TABLE IF EXISTS tblContactsInfo";
		$pdo->exec($dropQuery);
		
		$createQuery ="CREATE TABLE tblContactsInfo
		(
			ID		INT(6) NOT NULL AUTO_INCREMENT,
			Name	VARCHAR(20) NOT NULL,
			Phone	INT(10) NOT NULL,
			
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
?>