<?php
	$host="localhost";
	$userMS = "dwyenp1";
	$passwordMS = "1000019755";
	$database = "dwyenp1_IN612";
	
	//connect to mySQL server
	try
	{
		$pdo = new PDO("mysql:host=$host;dbname=$database", $userMS, $passwordMS);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	}
	catch(PDOException $e)
	{
		$error = "Connection to database server failed";
		include "error.html.php";
		exit();
	}
	
	//Uncomment to recreate the database
	//include "createDatabase.php";
?>