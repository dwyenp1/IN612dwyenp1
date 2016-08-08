<?php

header("Content-type: text/css");

//Random values for the background colour
$nRed = rand(0, 255);
$nGreen = rand(0, 255);
$nBlue = rand(0, 255);

?>

body
{
	background-color: <?php echo("rgb($nRed, $nGreen, $nBlue)"); ?>;
}

table
{
	border: 2px solid black;
	border-collapse: collapse;
	background-color: LightGray;
	text-align: center;
}

th
{
	border: 2px solid black;
	background-color: gray;
	padding: 5px;
}

td
{
	border: 2px solid black;
	padding: 5px;
}