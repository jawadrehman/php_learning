<?php
require '../header.inc.php';
$file_name = $_FILES['file']['name'];
echo $file_name . '<br>';

if (isset($_FILES['file']['name'])) {
	if (!empty($file_name)) {

		$destination = 'uploads/';
		$tmp_name = $_FILES['file']['tmp_name'];
		$type = $_FILES['files']['type'];

		if ($type != 'png') {
			if (move_uploaded_file($tmp_name, $destination . $file_name)) {
				echo 'successful';
			} else {
				echo 'unsuceesful';
			}
		}
		
		else{
			echo 'Chose a .png file';
		}

	} else {
		echo 'Enter something before pressing buttons!!!';
	}
}
?>

<div class = "container">

	<form action = "index.php" method = "post" enctype="multipart/form-data">

		<input type = "file" name = "file">
		<br />
		<br />
		<input type = "submit" value = "Submit" class = "btn">

	</form>

</div>
