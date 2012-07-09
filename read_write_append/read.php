<?php
	$readin = file('names.txt');
	$readin_count = count($readin);
	
	$count = 1;
	
	//echo 'The readin count is '.$readin_count;
	
	foreach ($readin as $fname) {
		echo trim($fname);
		
		if($count<$readin_count){
			echo ','."<br>";
			$count++;
		}
	}
?>