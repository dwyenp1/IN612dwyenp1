<?php
include "accessControl.php";

$_SESSION = array();
session_destroy();

?>

<html>

<p>You have been logged out</p>

<a href="secureHomePage.html.php">Login</a>

</html>