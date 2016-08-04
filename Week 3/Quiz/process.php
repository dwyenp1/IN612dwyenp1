<?php
	foreach($_POST as $field=>$value)
		if($field!="submitted")
			echo("$field: $value<br>");
?>