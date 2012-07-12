<?php
ob_start();
session_start();

require_once '../header.inc.php';

if (isset($_POST['user_name'])) {
	if (!empty($_POST['user_name'])) {
		$user_name = $_POST['user_name'];
		

		$_SESSION['name'] = $user_name;

		header('Location: view.php');
		
		echo 'Y U NO REDIRECT?';

	} else {
		echo 'Please fill in user name';
	}

}

if (!empty($_SESSION['name'])) {
	echo 'Y U NOT DISPLAY?';
	$user_name = $_SESSION['name'];

}

ob_flush();
?>

<div class = "container">

	<form action = "set.php" method = "post">

		<p>
			You are logged in as <strong> <?php echo $user_name
			?></strong>
		</p>

		<p>
			Enter user name :-
		</p>

		<input type = "text" class = "search-query search" name = "user_name">

		<input type = "submit" class = "btn" value = "Submit">

	</form>

</div>
