<!DOCTYPE html>
<html>
<head>
	<title>Select a Sport</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="olympics.css">
	
</head>
<body>
	<!-- The first page the user sees. Selects the medal athletes to view 
		 via a drop box with options divided by sport. -->
		 
	<div class="container">
		<?php
			include "connect.php";
			
			$self = htmlentities($_SERVER['PHP_SELF']);
			echo "<form action ='$self' method='POST'> ";
		?>
		
		<!-- Main logo -->
		<img class="logo" src="logos/Rio_2016_logo.svg.png" alt="Rio Olympics 2016">
		
		<br>
		
		<h3>Olympic Committee Management Tool</h3>	
			<div class="dropDownList">

				
				<!--Submit button-->
				<input type="submit" name="pageSelect" value="Display Athletes">
				
				<!--Submit button-->
				<input type="submit" name="pageSelect" value="Display Countries">
				
				<!--Submit button-->
				<input type="submit" name="pageSelect" value="Add Country">
			</div>
		</form>
	</div>

</body>
</html>