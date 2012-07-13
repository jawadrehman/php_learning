<?php
require 'connect.inc.php';

$uh = trim(strtolower($_GET['uh']));
echo $uh.'<br>';
if($uh == 'u' || $uh == 'h'){
	echo 'done and u';
}

else {
	echo 'must be u or h';
}
?>

<form action = "index.php" method = "get">
	<select name = "uh">
		<option>u</option>
		<option>h</option>
	</select>

	<br />
	<br />

	<input type = "submit" value = "Submit">

</form>
<?php
$query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy` = '$uh' ORDER BY `id` DESC";

if ($query_run = mysql_query($query)) {
	//echo'sucess';
	while ($query_row = mysql_fetch_array($query_run)) {
		$food = $query_row['food'];
		$calories = $query_row['calories'];

		echo $food . ' has ' . $calories . '<br>';
	}
	
} else {
	echo mysql_error();
}
?>
