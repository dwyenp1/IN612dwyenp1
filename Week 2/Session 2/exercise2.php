<!DOCTYPE html>
<html>
	<head>
		<title>Week 2 Session 2 - Exercise 2 and 3</title>
		
		<link rel="stylesheet" href="style2.php">
	</head>
	
	<body>
		<?php
			$randArray = array();
			$randArrayLength = rand(1, 25);
			
			for($i = 0; $i < $randArrayLength; $i+=1)
			{
				$randArrayValue = rand(0, 100); 
				$randArray[$i] = "$randArrayValue";				
			}
			
			echo("
				<table>
					<tr>
						<th>Index</th>
						<th>Index</th>
					</tr>");
			
			foreach($randArray as $index=>$value)
			{
				echo("
					<tr>
						<td>$index</td>
						<td>$value</td>
					</tr>");
			}
			
			echo("</table>");
		?>
	</body>
</html>