<!DOCTYPE html>

<html>
	<head>
		<title>Order Confirmation</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="pizza.css">
	</head>

	<body>
	
		<header>
			<img src="pizzaBanner.jpg" alt="banner" />
		</header>
		
		<h3>Thank you for your order.
		
		<br><br>
		
		Your pizza is on its way.
		
		<br><br>
		
		<?php
			foreach($_POST as $field=>$value)
			{
				if($field == "orderTotal")
				{
					echo("Please have your $$value ready.");
				}
			}
		?>
		</h3>
	</body>
	
</html>