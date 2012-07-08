<?php
	ob_start();
	require_once '../header.inc.php';
	session_start();
	$user_name = $_SESSION['name'];
?>

<div class = "container hero-unit">
	
	<h1> The user name is </h1>
	
	<p align = "center"> <?php echo $user_name;?></p>
	
	
	
</div>
