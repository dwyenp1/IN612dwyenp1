<!DOCTYPE html>
<html>
<head>
	<title>Table Output</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
</head>
<body>
	<!-- -->
	
	<div class="container">
		<?php
			include "connect.php";

			try
			{				
				$selectString = "SELECT * FROM tblCountry";
				$result3 = $pdo->query($selectString);	
			}
			catch(PDOException $e)
			{
				$error = "Select statement error";
				include "error.html.php";
				exit();
			}
		?>

		<?php
			echo("<table>
				<tr>
					<th>country</th><th>population</th><th>flagImage</th>
				</tr>");
				
			foreach($result3 as $row)
			{
				echo("<tr>
					<td>$row[name]</td><td>$row[population]</td><td><img src=$row[flagImage] alt='flag'></td>
					</tr>");
			}
		?>
		</table>
		
		<br>
		<?php $self = htmlentities($_SERVER['PHP_SELF']);
			echo "<form action ='$self' method='POST'> ";
		?>
		
		<br>
		
		<!--Return to selection form button-->
		<input type="submit" name="return" value="Return" style="display:inherit;width:25%;">
		</form>
		<br>
		
	</div>
</body>
</html>