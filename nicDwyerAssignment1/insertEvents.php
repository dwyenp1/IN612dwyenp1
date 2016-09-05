<?php
	//Insert event records using a prepared statement
	try
	{
		$stmt = $pdo->prepare("INSERT INTO tblEvent(sport, event) VALUES(:sport, :event)");
		$stmt->bindParam(':sport', $sport);
		$stmt->bindParam(':event', $event);
		
		$sport = 'Canoe Sprint - 200m';
		$event = 'Women\'s  K-1 200m';
		$stmt->execute();
		
		$sport = 'Rowing';
		$event = 'Men\'s Single Sculls';
		$stmt->execute();
		
		$sport = 'Rowing';
		$event = 'Men\'s Coxless Pair';
		$stmt->execute();
		
		$sport = 'Sailing';
		$event = 'Men\'s 49er';
		$stmt->execute();
		
		$sport = 'Rugby Sevens';
		$event = 'Women\'s Tournament';
		$stmt->execute();
		
		$sport = 'Rowing';
		$event = 'Women\'s Coxless Pair';
		$stmt->execute();
		
		$sport = 'Athletics';
		$event = 'Women\'s Shot Put';
		$stmt->execute();
		
		$sport = 'Shooting';
		$event = 'Women\'s Trap';
		$stmt->execute();
		
		$sport = 'Canoeing';
		$event = 'Women\'s Slalom K-1';
		$stmt->execute();
		
		$sport = 'Cycling';
		$event = 'Men\'s Team Sprint';
		$stmt->execute();
		
		$sport = 'Sailing';
		$event = 'Laser';
		$stmt->execute();
		
		$sport = 'Sailing';
		$event = 'Women\'s 470';
		$stmt->execute();
		
		$sport = 'Sailing';
		$event = 'Women\'s 49erFX';
		$stmt->execute();
		
		$sport = 'Golf';
		$event = 'Women\'s Individual';
		$stmt->execute();
		
		$sport = 'Canoe Sprint - 500m';
		$event = 'Women\'s K-1 500m';
		$stmt->execute();
		
		$sport = 'Athletics';
		$event = 'Men\'s Shot Put';
		$stmt->execute();
		
		$sport = 'Athletics';
		$event = 'Women\'s Pole Vault';
		$stmt->execute();
		
		$sport = 'Athletics';
		$event = 'Men\'s 1500 Metres';
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		$error = "Inserting event data failed";
		include "error.html.php";
		exit();
	}
?>