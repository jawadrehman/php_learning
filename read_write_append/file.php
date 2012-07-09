<?php
require_once '../header.inc.php';
if (isset($_POST['name'])) {
	$name = $_POST['name'];

	if (!empty($name)) {
		$handle = fopen('names.txt', 'a');
		
		fwrite($handle, $name."\n");

		fclose($handle);
		
		$message = 'done';
	} else {
		$message = 'Please enter a name';
	}
}
?>

<div class = "container">
	<?php echo $message; ?>
	<form action = "file.php" method = "post">

		<p>
			Name :-
		</p>

		<input type = "text" class = "search text_field" name = "name">

		<input type = "submit" value = "submit" class = "btn btn-info">

	</form>

</div>
