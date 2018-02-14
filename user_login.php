<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['pass'])) {
$pass = $_GET['pass'];}
$file = fopen("users.ac", "r");
while(!feof($file)) {
$line = fgets($file);
$line = str_replace("\n",'',$line);
if($line==$id."☺".$pass){
	echo "true";
}
}
fclose($file);
?>