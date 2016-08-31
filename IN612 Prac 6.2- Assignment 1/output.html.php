<!DOCTYPE html>
<html>
<head>
	<title>Table Output</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
</head>
<body>

	<table>
		<tr>
			<th>iD</th><th>lastName</th><th>firstName</th><th>gender</th><th>image</th><th>medal</th><th>eventId</th>
		</tr>
	
	<?php
		foreach($_POST[$row] as $row)
		{
			echo("<tr><td>$row[iD]</td><td>$row[lastName]</td><td>$row[firstName]</td><td>$row[gender]</td><td><img src=$row[image] alt='Athlete'></td><td>$row[medal]</td><td>$row[eventId]</td></tr>");
		}
	?>
	
	</table>
	
	<br>

	<table>
		<tr>
			<th>iD</th><th>sport</th><th>event</th>
		</tr>
			
	<?php
		foreach($result as $row)
		{
			echo("<tr><td>$row[iD]</td><td>$row[sport]</td><td>$row[event]</td></tr>");
		}
	?>
	
	</table>
	
	<br>
	
	<table>
		<tr>
			<th>iD</th><th>lastName</th><th>firstName</th><th>gender</th><th>image</th><th>medal</th><th>eventId</th>
		</tr>
	
	<?php
		foreach($result2 as $row)
		{
			echo("<tr><td>$row[iD]</td><td>$row[lastName]</td><td>$row[firstName]</td><td>$row[gender]</td><td><img src=$row[image] alt='Athlete'></td><td>$row[medal]</td><td>$row[eventId]</td></tr>");
		}
	?>
	
	</table>
	
	<br>	

</body>
</html>