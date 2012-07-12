<?php
$include_dist = substr_count(dirname(__FILE__), DIRECTORY_SEPARATOR);
$calling_dist = substr_count(dirname($_SERVER['SCRIPT_FILENAME']), DIRECTORY_SEPARATOR);
$path = str_repeat('../', $calling_dist - $include_dist + 1);
?>
<head>

	<link rel="stylesheet" type="text/css" href="<?=$path ?>learning/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=$path ?>learning/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$path ?>learning/bootstrap/style.css">

	<title>blink - <?php echo $title?></title>;
</head>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?=$path ?>learning/index.php"> <strong>blink</strong> </a>
			<div class = "navi">
				<ul class="nav">
					<li class="active">
						<a href="<?=$path ?>learning/index.php">Home</a>
					</li>
					<li>
						<a href="<?=$path ?>learning/posts.php">Posts</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
				</ul>
				
				<form class="search navbar-search pull-right">
  					<input type="text" class="search search-query" placeholder="Search">
				</form>
			</div>
			
		</div>
		
	</div>
	
</div>

<br />
<br />
<br />