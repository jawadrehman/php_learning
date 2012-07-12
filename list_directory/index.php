<?php
require_once '../header.inc.php';
//setting the default directory
$directory = '/home/jawad/';
/**
 * check if directory is set in the textbox
 * if it is then check if it is empty or not
 * if not empty then change the directory from default to that which is specified by user
 */
if (isset($_POST['directory_input'])) {
	$directory_input = $_POST['directory_input'];

	if (!empty($directory_input)) {

		if (opendir($directory_input)) {
			$directory = $directory_input;
			$message = 'valid input';
		}

	} else {
		$message = 'Nothing entered' . '<br>' . 'Displaying default directory';
	}
} else {
	$message = 'displaying home directory';
}
?>

<div class = "container">

	<form action = 'index.php' method = 'post'>

		<input type = "text" name = "directory_input" class = "search text_field">

		<input type = "submit" value = "Submit">

	</form>

	<div class = "hero-unit">
		<h1>
			 showing directory 
		</h1>
		<p align="center"> 	<?php echo $directory;?> </p>
		
	</div>
	<?php

	if ($handle = opendir($directory)) {

		while ($file = readdir($handle)) {
			if (substr($file, 0, 1) != '.') {
				echo '<a href = file://'.$directory.$file.'/>'.$file.'</a>' . '<br>';
			}

		}
	}
?>
</div>

