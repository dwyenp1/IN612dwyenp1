<!DOCTYPE html>
<html>
<head>
	<title>Select a Sport</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
</head>
<body>
	<?php
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo "<form action ='$self' method='POST'> ";
	?>

		<h1>Rio Olympics 2016</h1>
		
		<br>
		
		<h3>Athlete Database</h3>
		
		<fieldset>
			<legend>Select a Sport</legend>
			<select>
				<option value="1">Women's K-1 200m</option>
				<option value="2">Men's Single Sculls</option>
				<option value="3">Men's Coxless Pairs</option>
				<option value="4">Men's 49er</option>
			</select>
			
			<!--Submit button-->
			<input type="submit" name="sportSelect" value="Submit">
		</fieldset>
	</form>


</body>
</html>