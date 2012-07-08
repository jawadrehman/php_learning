<?php
$title = 'Find Replace App';
require_once 'header.inc.php';

$offset = 0;

if (isset($_POST['user_input'], $_POST['find'], $_POST['replace'])) {

	$user_input = htmlentities($_POST['user_input']);
	$find = htmlentities($_POST['find']);
	$replace = htmlentities($_POST['replace']);
	$find_lenght = htmlentities(strlen($find));

	if (!empty($_POST['user_input']) && !empty($_POST['find']) && !empty($_POST['replace'])) {
		//echo $user_input.'<br>'.$find.'<br>'.$replace.'<br>';

		while ($strpos = strpos($user_input, $find, $offset)) {

			$offset = $strpos + $find_lenght;

			$user_input = substr_replace($user_input, $replace, $strpos, $find_lenght);

		}

	} else {
		$user_input = 'Please fill in all the fields';
	}

}
?>

<div class = "container">
	<?php
	echo $user_input;
	?>
	<form action = "find_replace.php" method = "POST">
		<p>
			Enter text :-
		</p>
		<textarea name = "user_input" rows="6" cols="30"><?php echo $user_input?></textarea>					
	




		<p>
			Find :-
			<input type="text" name = "find" class = "search text_field"/>
		</p>

		<p>
			Replace :-
			<input type = "text" name = "replace" class = "search text_field" />
		</p>

		<input class = "btn btn-inverse" type = "submit" value = "Submit"/>

	</form>
</div>