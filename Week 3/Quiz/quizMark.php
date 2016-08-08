<?php
//Load data
$numCountries = $_POST["numCountries"];
$sport = $_POST["sport"];
$flag = $_POST["flag"];
$city = $_POST["city"];
$notInOlympics = $_POST["notInOlympics"];
$score = 0;
?>

<table>
	<tr>
		<th>Question</th>
		<th>Your Answer</th>
		<th>Mark</th>
	</tr>
	
	<tr>
		<td>How many countries are in the 2016 Olympics?</td>
		<td><?php echo("$numCountries")?></td>
		<td>
		<?php if($numCountries == 206)
		{
			echo("<img src='_images/right.jpg' alt='Right'>");
			$score++;
		}
		else
		{
			echo("<img src='_images/wrong.jpg' alt='Wrong'>");
		}
		?>
		</td>
	</tr>
	
	<tr>
		<td>The first medal for New Zealand was in:</td>
		<td><?php echo("$sport")?></td>
		<td>
		<?php if($sport == "Shooting")
		{
			echo("<img src='_images/right.jpg' alt='Right'>");
			$score++;
		}
		else
		{
			echo("<img src='_images/wrong.jpg' alt='Wrong'>");
		}
		?>
		</td>
	</tr>
	
	<tr>
		<td>Which country was <b>not</b> in the top 3 medal count in the last Olympics?</td>
		<td><?php echo("$flag")?></td>
		<td>
		<?php if($flag == "Russia")
		{
			echo("<img src='_images/right.jpg' alt='Right'>");
			$score++;
		}
		else
		{
			echo("<img src='_images/wrong.jpg' alt='Wrong'>");
		}
		?>
		</td>
	</tr>

	<tr>
		<td>Where were the last four Olympic Games played?</td>
		<?php 
		//sizeof($city)
		
		
		foreach($city as $value)
		{	
			echo("<td>$value</td>");
			
			if(in_array($value, $city))
			{
				echo("<td><img src='_images/right.jpg' alt='Right'></td>");
			}
			else
			{
				echo("<td><img src='_images/wrong.jpg' alt='Wrong'></td>");
			}	
		}
		?>
	</tr>

	<tr>
		<td>Which game is no longer in the Olypmics?</td>
		<td><?php echo("$notInOlympics")?></td>
		<td>
		<?php if($notInOlympics == "Baseball")
		{
			echo("<img src='_images/right.jpg' alt='Right'>");
			$score++;
		}
		else
		{
			echo("<img src='_images/wrong.jpg' alt='Wrong'>");
		}
		?>
		</td>
	</tr>

<?php
/*
		foreach($_POST as $field=>$value)
		{
			if($field != "submitted")
			{
				if($field == "city")
				{
					//Remember that the city array is within $_POST
					foreach($_POST["city"] as $_POST["city"]=>$value)
					{
						//Chrome strips tags by default
						$value = strip_tags($value);
						echo("<tr>");
						echo("<td>$field:</td><td>$value</td>");
						echo("</tr>");
					}
				}
				else
				{
					echo("<tr>");
					echo("<td>$field:</td><td>$value</td>");
					echo("</tr>");
				}
			}	
		}
		*/
?>

</table>

<p>Score: <?php echo("$score"); ?></p>