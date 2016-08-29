<?php
	//Insert event records
	try
	{
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Canoe Sprint - 200m', 'Women\'s  K-1 200m')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Rowing', 'Men\'s Single Sculls')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Rowing', 'Men\'s Coxless Pair')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Sailing', 'Men\'s 49er')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Rugby Sevens', 'Women\'s Tournament')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Rowing', 'Women\'s Coxless Pair')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Athletics', 'Women\'s Shot Put')";
		$pdo->exec($insertQuery);
		$insertQuery = "INSERT INTO tblEvent(sport, event) VALUES('Shooting', 'Women\'s Trap')";
		$pdo->exec($insertQuery);
	}
	catch(PDOException $e)
	{
		$error = "Inserting event data failed";
		include "error.html.php";
		exit();
	}
?>