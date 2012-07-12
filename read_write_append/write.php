<?php
$handle = fopen('sidebar_subscribers.txt', 'w') or die('fopen failed');
fwrite($handle, 'budhoo') or die('fwrite failed');
fclose($handle);
?>
