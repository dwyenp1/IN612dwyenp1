<!DOCTYPE html>

<html>
	<head>
		<title>Order Summary</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="pizza.css">
	</head>

	<body>
	<?php
	$self = htmlentities($_SERVER['PHP_SELF']);
	echo "<form action = '$self' method='POST'> ";
	?>
	
	<header>
		<img src="pizzaBanner.jpg" alt="banner" />
	</header>
	
	<h3>Your Order</h3>
	
	<br>
	
	<table>
		
	<?php
		$orderTotal = 0;
		//Try and put this php somewhere that makes more sense (controller?)			
		foreach($_POST as $field=>$value)
		{
			if($field != "order")
			{
				if($field == "topping")
				{
					//Remember that the topping array is within $_POST
					foreach($_POST["topping"] as $_POST["topping"]=>$value)
					{
						//Chrome strips tags by default
						$value = strip_tags($value);
						echo("<tr>");
						echo("<td>$field</td><td>$value</td>");
						echo("</tr>");
						
						$orderTotal++;
					}
				}
				else
				{
					//Add pizza size cost to orderTotal
					if($field == "size")
					{
						switch($value)
						{
							case "Small $5":
								$orderTotal += 5;
								break;
							case "Medium $10":
								$orderTotal += 10;
								break;
							case "Large $15":
								$orderTotal += 15;
								break;
							default:
								break;
						}
					}
					
					echo("<tr>");
					echo("<td>$field</td><td>$value</td>");
					echo("</tr>");
				}
			}	
		}
	?>
		
	</table>
	
	<br>
	
	<?php
		echo("<h3>Your order comes to $$orderTotal</h3>");
	?>
	
	<!--Cancel order-->
	<input type="submit" name="cancel" value="Cancel Order">
	
	<!--Confirm order-->
	<input type="submit" name="confirm" value="Confirm Order">
	
	<!--Order Total-->
	<input type="hidden" name="orderTotal" value="<?php echo("$orderTotal");?>">
	
	</body>
	
</html>