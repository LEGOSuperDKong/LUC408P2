<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['password'])) {
$password = $_GET['password'];}
if (isset($_GET['cid'])) {
$cid = $_GET['cid'];}
$file = fopen("messages.ac", "r");
while(!feof($file)) {
$line = fgets($file);
$line = str_replace("\n","",$line);
$arr = explode("☺",$line);
if($arr[0] != ''){
if($arr[0]==$cid){
	if($id == $arr[1]){
	    echo "<p style='max-width: 75%;background-color:#c7e8be;border-radius:5px;'><span class='me'>Me: </span>".$arr[2]."</p>\n";
	}else{
	    echo "<p style='max-width: 75%;background-color:#aec3e5;border-radius:5px;'><span class='other'>".$arr[1].": </span>".$arr[2]."</p>\n";
	}
}}
}
fclose($file);
?>