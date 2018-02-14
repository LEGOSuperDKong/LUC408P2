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
	    echo "<p><span class='me'>Me: </span>".$arr[2]."</p>\n";
	}else{
	    echo "<p><span class='other'>".$arr[1].": </span>".$arr[2]."</p>\n";
	}
}}
}
fclose($file);
?>