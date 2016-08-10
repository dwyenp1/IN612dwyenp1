<!doctype html>
	<head>
		<title>Pizza Order</title>
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
	
	<div class="wrapper">		
		
		<br>
		
		<fieldset>
			<legend>Place Your Order</legend>
				
			<!--Radio buttons-->
			<p>Select your pizza size:</p>
			<input type="radio" name="size" value="Small $5">Small ($5)<br>
			<input type="radio" name="size" value="Medium $5">Medium ($10)<br>
			<input type="radio" name="size" value="Large $5">Large ($15)<br>
				
			<!--Checkbox list-->
			<p>Select your toppings ($1 for each topping):</p>
			<input type="checkbox" name="topping[]" value="Pepperoni">Pepperoni<br>
			<input type="checkbox" name="topping[]" value="Mushroom">Mushroom<br>
			<input type="checkbox" name="topping[]" value="Capsicum">Capsicum<br>
			<input type="checkbox" name="topping[]" value="Olives">Olives<br>
			<input type="checkbox" name="topping[]" value="Anchovy">Anchovy<br>
			
			<br>
			
			<!--Textbox input-->
			<label for="numCountries">Delivery Address: <label>
			<input type="text" name="deliveryAddress" id="deliveryAddress" value="" size="">
		</fieldset>
			
		<br>
			
		<!--Submit button-->
		<input type="submit" name="order" value="Submit">
		</form>
		
	</div>
	
	</body>
</html>