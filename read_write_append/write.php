<?php
$handle = fopen('sidebar_subscribers.txt', 'w') or die('fopen failed');
fwrite($handle, 'Alex') or die('fwrite failed');
fclose($handle);
?>
