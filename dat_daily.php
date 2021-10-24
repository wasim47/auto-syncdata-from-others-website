<?php
	$open_file = 'daily.dat';
	$fp=fopen($open_file,"w");
	if($data=fwrite($fp,0))
	fclose($fp); 
?>	