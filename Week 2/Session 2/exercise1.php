<!DOCTYPE html>
<html>
	<head>
		<title>Week 2 Session 2 - Exercise 1</title>
		
		<link rel="stylesheet" href="style1.php">
	</head>
	
	<body>
		<?php
			for($i = 0; $i < 10; $i+=1)
			{	
				if($i%2 == 0)
				{
					for($j = 0; $j < 10; $j+=1)
					{
						echo("<img src=\"happyPenguin.gif\" alt=\"Happy Penguin\">");
					}
					
					echo("<br>");
				}
				else
				{
					for($j = 0; $j < 10; $j+=1)
					{
						echo("<img src=\"angryDino.gif\" alt=\"Angry Dino\">");
					}
					
					echo("<br>");
				}
			}
		?>
	</body>
</html>