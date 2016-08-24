<?php
	//Create database; drop if it already exists
	try
	{
		$sql = "DROP DATABASE IF EXISTS $database";
		$pdo->exec($sql);
		$sql = "CREATE DATABASE $database";
		$pdo->exec($sql);
	}
	//Catch exception if error with query, dieplay error page
	catch (PDOException $e)
	{
		$error = "Unable to create database";
		include "error.html.php";
		exit();
	}
?>