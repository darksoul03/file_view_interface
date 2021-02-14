<?php

$result = $_GET['name'];
$testa = escapeshellarg($result);
$result = shell_exec("/var/www/html/aditya/scripts/findpath.sh $testa");
//echo $result;
//reading the output file of findpath.sh
$myfile = fopen("/var/www/html/aditya/dependency/findpath.txt", "r") or die("Unable to open file!");
$pagetext = fread($myfile,filesize("/var/www/html/aditya/dependency/findpath.txt"));
echo nl2br($pagetext)	;
fclose($myfile);
?>


