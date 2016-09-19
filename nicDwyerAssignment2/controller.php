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
		}
		
	}
	else
	{
		include 'selectionForm.html.php';
	}	
?>		
