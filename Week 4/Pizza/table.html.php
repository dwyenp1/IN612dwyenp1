<!DOCTYPE html>

<html>
	<head>
	</head>

	<body>
	<?php
	$self = htmlentities($_SERVER['PHP_SELF']);
	echo "<form action = '$self' method='POST'> ";
	?>
	
	<p>Table - order confirm/cancel</p>
	
	<br>
	
	<table>
		
	<?php
		//Try and put this php somewhere that makes more sense (controller?)			
		
		foreach($_POST as $index=>$value)
			{
				if($value != "Submit")
				{
					echo("<tr>");
					echo("<td>$index</td><td>$value</td>");
					echo("</tr>");
				}
				
			}
	?>
		
	</table>
	
	<br>
	
	<!--Cancel order-->
	<input type="submit" name="cancel" value="Cancel Order">
	
	<!--Confirm order-->
	<input type="submit" name="confirm" value="Confirm Order">

	</body>
	
</html>