<?php

$file = 'count.txt';

$handle = fopen($file, 'r') or die('fopen failed');
echo $readin = fread($handle, filesize($file)).'<br>';
fclose($handle);

$handle = fopen($file, 'w') or die('fopen failed 2'.'<br>');
$count = $readin + 1;
fwrite($handle, $count) or die('fwrite failed'.'<br>');
fclose($handle) or die('fclosed failed');

echo $count;
?>