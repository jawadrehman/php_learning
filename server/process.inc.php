<?php
//get the current file name

$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];

//determine where to redirect
$redirect_file;
if ($currentFile == 'index.php') {
	$redirect_file = 'anotherpage.php';
} else {
	$redirect_file = 'index.php';
}

?>

<div class = "container">

	<form action = <?php echo $redirect_file ?> method = "POST">
		<input type = "submit" value ="Change page" class = "btn">
	</form>

</div>
