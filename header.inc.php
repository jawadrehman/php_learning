<?php
$include_dist = substr_count(dirname(__FILE__), DIRECTORY_SEPARATOR);
$calling_dist = substr_count(dirname($_SERVER['SCRIPT_FILENAME']), DIRECTORY_SEPARATOR);
?>
<head>

	<link rel="stylesheet" type="text/css" href="<?=str_repeat('../', $calling_dist - $include_dist + 1) ?>learning/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=str_repeat('../', $calling_dist - $include_dist + 1) ?>learning/bootstrap/css/bootstrap.min.css">
	<title>blink - <?php echo $title?></title>;
</head>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#"> <strong>blink</strong> </a>
			<div class = "pull-right">
				<ul class="nav">
					<li class="active">
						<a href="<?=str_repeat('../', $calling_dist - $include_dist + 1) ?>learning/index.php">Home</a>
					</li>
					<li>
						<a href="<?=str_repeat('../', $calling_dist - $include_dist + 1) ?>learning/posts.php">Posts</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<br />
<br />
<br />
<br />
<br />
