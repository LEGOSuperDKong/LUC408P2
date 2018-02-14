<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['pass'])) {
$pass = $_GET['pass'];}
$username = 0;
$file = fopen("users.ac", "r");
while(!feof($file)) {
$line = fgets($file);
$line = str_replace("\n",'',$line);
if($line!=''){
$arr = explode("☺",$line);
if($arr[0]==$id){
	$username = 1;
}}
}
fclose($file);
if($username == 0){
$file = fopen("users.ac", "a");
fwrite($file,$id."☺".$pass."\n");
fclose($file);
echo 'alert("created");';
}else{
echo 'alert("username already exists.");';}
?>