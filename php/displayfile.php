

<?php
$result = $_GET['name'];
$myfile = fopen("$result", "r") or die("Unable to open file!");
$pagetext = fread($myfile,25000);
echo nl2br($pagetext);
//echo fread($myfile,filesize("$result"));
fclose($myfile);
//echo file_get_contents("$testa");
?>

