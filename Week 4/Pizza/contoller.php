<?php

		if (isset($_POST['confirm']))
		{
			include 'thankyou.html.php';
			
		} 
		else
			//hasn’t yet been submitted, display the form
		{
			if(isset($_POST['order']))
			{
				include 'table.html.php';
			}
			else
			{
				include 'form.html.php';
			}	
		}		
