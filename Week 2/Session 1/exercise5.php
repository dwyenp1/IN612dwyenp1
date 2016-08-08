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
		
		<title>Week 2 Exercise 5</title>
	</head>
	
	<body>
		<?php
			echo("<table>");
					
			echo("
				<tr>
					<th>Variable</th>
					<th>Value</th>
				</tr>
				");
				
			foreach($_SERVER as $index=>$value)
			{
				echo("<tr>");
				echo("<td>$index</td><td>$value</td>");
				echo("</tr>");
			}
			
			echo("</table>");
		?>
	</body>
</html>