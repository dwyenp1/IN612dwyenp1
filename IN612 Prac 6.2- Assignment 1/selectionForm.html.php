<!DOCTYPE html>
<html>
<head>
	<title>Select a Sport</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
</head>
<body>
	<?php
		include "connect.php";
		
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo "<form action ='$self' method='POST'> ";
	?>

		<h1>Rio Olympics 2016</h1>
		
		<br>
		
		<h3>Athlete Database</h3>
		
		<fieldset>
			<legend>Select a Sport</legend>

			<select name=sportList>
			<option value='0'>Show All</option>
			
			<?php
			//Populate the list box from the database
			$selectString = "SELECT sport,iD FROM tblEvent GROUP BY sport";
			
			foreach($pdo->query($selectString) as $row)
			{
				echo("<option value=$row[iD]>$row[sport]</option>");
			}
			?>
			
			</select>
			
			
			<!--Submit button-->
			<input type="submit" name="sportSelect" value="Submit">
		</fieldset>
	</form>


</body>
</html>