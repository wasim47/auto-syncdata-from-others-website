<?php
$fPath = $_SERVER['PHP_SELF'];
$path = dirname($fPath);
echo $open_file = $path.'/weekly.dat';

$fp=fopen($open_file,"w");
if($data=fwrite($fp,0))
fclose($fp); 

echo $data
?>	