<!doctype html>
<html>
	<head>
		<title>Processing the form</title>
		  <meta charset="UTF-8">
		   <style type = "text/css">
				body
				{
					background-color:#00A5E4;
					padding-left:10px;
				}
				fieldset
				{
					padding:10px;
				}
				table,td,th,tr
				{
					border:3px solid black;
					padding:10px;
				}
				table
				{
				border-collapse:collapse;
				}

		</style>
    </head>

	<body >


			
			<h3>User Responses</h3>
			

				<table >
					<tr>	
						<th>Input Control</th><th>Value</th>
					</tr>
				<?php
					foreach($_POST as $field=>$value)
					{
					if ($field != 'submit')
						{
					
							echo("<tr>");
							echo("<td>$field</td><td>$value</td>");
							echo("</tr>");
					
						}
					}
				?>
				</table>
	
	
	</body>
</html>