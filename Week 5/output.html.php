<!DOCTYPE html>
<html>
<head>
	<title>Table Output</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body>

	<br>
	
	<table>
		<tr>
			<th>ID</th><th>Name</th><th>Phone</th>
		</tr>
			
	<?php
		foreach($result as $row)
		{
			echo("<tr><td>$row[ID]</td><td>$row[Name]</td><td>$row[Phone]</td></tr>");
		}
	?>
	</table>
	
	<br>
	
	<table>
		<tr>
			<th>ID</th><th>Name</th><th>Phone</th>
		</tr>
			
	<?php
		foreach($result2 as $row)
		{
			echo("<tr><td>$row[ID]</td><td>$row[Name]</td><td>$row[Phone]</td></tr>");
		}
	?>
	</table>
	
	<br>

	<table>
		<tr>
			<th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th>
		</tr>
			
	<?php
		foreach($result3 as $row)
		{
			echo("<tr><td>$row[Field]</td><td>$row[Type]</td><td>$row[Null]</td><td>$row[Key]</td><td>$row[Default]</td><td>$row[Extra]</td></tr>");
		}
	?>
	</table>
	

</body>
</html>