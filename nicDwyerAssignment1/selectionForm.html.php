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
		
		<h3>Athlete Database</h3>	
			<div class="dropDownList">

				<select name=sportList>
				<option value='Show All'>Show All</option>
				
				<?php
				//Populate the list box from the database
				$selectString = "SELECT sport FROM tblEvent GROUP BY sport";
				
				foreach($pdo->query($selectString) as $row)
				{
					echo("<option value='$row[sport]'>$row[sport]</option>");
				}
				?>
				
				</select>
				
				<br>
				
				<!--Submit button-->
				<input type="submit" name="sportSelect" value="Submit">
			</div>
		</form>
	</div>

</body>
</html>