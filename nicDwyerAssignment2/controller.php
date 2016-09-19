<?php
	if(isset($_POST['pageSelect']))
	{	
		switch($_POST['pageSelect'])
		{
			case "Display Athletes":
				include 'output.html.php';
				break;
			case "Display Countries":
				include 'output2.html.php';
				break;
			case "Add Country":
				include 'addCountry.html.php';
				break;
			case "Add Athlete";
				include 'addAthlete.html.php';
				break;
		}
	}
	elseif(isset($_POST['country']))
	{
		include 'addCountryUser.php';
	}
	elseif(isset($_POST['athlete']))
	{
		include 'addAthleteUser.php';
	}
	else
	{
		include 'selectionForm.html.php';
	}	
?>		
