<!DOCTYPE HTML>

<html>
	<head>
		<style>
			table {border: 2px solid black;
				border-collapse: collapse;
				background-color: LightGray;
				text-align: center;}
			th {border: 2px solid black;
				background-color: gray;
				padding: 5px;}
			td {border: 2px solid black;
				padding: 5px;}
		</style>
	
		<title>Week 2 Exercise 4</title>
	</head>
	
	<body>
		<?php
			$animalSpecies = array("horse", "dog", "sheep", "flamingo", "hippo");
					
			echo("<table>");
					
			echo("
				<tr>
					<th>Location</th>
					<th>Animal</th>
				</tr>
				");
							
			foreach($animalSpecies as $index=>$value)
			{
				echo("<tr>");
				echo("<td>$index</td><td>$value</td>");
				echo("</tr>");
			}
					
			echo("</table>");
		?>	
	</body>
</html>