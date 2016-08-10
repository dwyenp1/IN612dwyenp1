<!doctype html>
<html>
	<head>
		<title>Form Elements</title>
		  <meta charset="UTF-8">
		   <style type = "text/css">
				body
				{
					background-color:#00A5E4;
					padding-left:10px;
				}
				fieldset
				{
					padding:10px;
				}
				table,td,th,tr
				{
					border:3px solid black;
					padding:10px;
				}
				table
				{
				border-collapse:collapse;
				}

		</style>
    </head>

<body >


			
			<h3>User Responses</h3>
			

				<table >
				<tr><th>Input Control</th><th>Value</th></tr>");

			foreach($_POST as $field=>$value)
			{
			if ($field != 'submit')
				{
			
		     		echo("<tr>");
		     		echo("<td>$field</td><td>$value</td>");
		     		echo("</tr>");
		 	
				}
			}
			echo("</table>");
	}
	
	function showForm()
	{
		$self = htmlentities($_SERVER['PHP_SELF']);
		echo("<h1>Fruit Quiz</h1>");
		echo("<form action = '$self' method='POST'>
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
		  </form>");	
	}
	

?>
	
</body>
</html>