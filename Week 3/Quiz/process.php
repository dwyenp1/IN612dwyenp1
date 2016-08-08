<?php
	echo("<table>");

	echo("
		<tr>
			<th>Field</th>
			<th>Value</th>
		</tr>
		");

		foreach($_POST as $field=>$value)
		{
			if($field != "submitted")
			{
				if($field == "city")
				{
					//Remember that the city array is within $_POST
					foreach($_POST["city"] as $_POST["city"]=>$value)
					{
						//Chrome strips tags by default
						$value = strip_tags($value);
						echo("<tr>");
						echo("<td>$field:</td><td>$value</td>");
						echo("</tr>");
					}
				}
				else
				{
					echo("<tr>");
					echo("<td>$field:</td><td>$value</td>");
					echo("</tr>");
				}
			}	
		}
	
	echo("</table>");			
?>