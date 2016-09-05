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
				//Get the users' selection from the drop down box
				$choice = $_POST['sportList'];
				
				
				if($choice == 'Show All')
				{
					$selectString = "SELECT a.lastName, a.firstName, a.gender, a.image, a.medal, e.event 
								FROM tblAthlete AS a JOIN tblEvent AS e 
								ON (a.eventId = e.iD)";
					$result3 = $pdo->query($selectString);	
				}
				else
				{
					//resultCount is used to check if zero records are returned
					//by the selectString. Not sure if it's working correctly, but
					//it's uneccessary as the database is now, since all selectStrings 
					//return at least one record.
					$selectString = "SELECT COUNT(*) 
								FROM tblAthlete AS a JOIN tblEvent AS e 
								ON (a.eventId = e.iD) 
								WHERE (e.sport = '$choice')";
					$resultCount = $pdo->query($selectString);
					
					$selectString = "SELECT a.lastName, a.firstName, a.gender, a.image, a.medal, e.event 
								FROM tblAthlete AS a JOIN tblEvent AS e 
								ON (a.eventId = e.iD) 
								WHERE (e.sport = '$choice')";
					$result3 = $pdo->query($selectString);
				}
			}
			catch(PDOException $e)
			{
				$error = "Select statement error";
				include "error.html.php";
				exit();
			}
		?>

		<?php
			//Only displays the table (including headers) if one of these is true (in theory, at least).
			//Order of these two conditions seems to matter
			if($choice = "Show All" || ($resultCount->fetchColumn() > 0))
			{	
				echo("<table>
					<tr>
						<th>lastName</th><th>firstName</th><th>gender</th><th>image</th><th>medal</th><th>event</th>
					</tr>");
				
				foreach($result3 as $row)
				{
					echo("<tr><td>$row[lastName]</td><td>$row[firstName]</td><td>$row[gender]</td><td><img src=$row[image] alt='Athlete'></td><td>$row[medal]</td><td>$row[event]</td></tr>");
				}
			}
			else
			{
				echo("No results");
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