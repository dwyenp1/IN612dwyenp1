<!doctype html>
<html>
	<head>
	<title>Form Processing</title>
	 <meta charset="UTF-8">
	 
	</head>
	<body >
	<h1>Small Quiz</h1>
		<?php
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo "<form action = '$self' method='POST'> ";
		?>
			<fieldset>
			<legend>Fruity questions</legend>

		<p>Select a fruit:</p>
		<input type = 'radio' name='fruit' value = 'apple'>apple<br>
		<input type = 'radio' name='fruit' value = 'peach'>peach<br>
		<input type = 'radio' name='fruit' value = 'orange'>orange<br>

		<p>Your favourite vegetable is: 
		<input type='text' name='vegetable'>
		<br>
		<input type='submit' name='submit' value = 'Submit'>
		</fieldset>
		</form>
	</body>
</html>