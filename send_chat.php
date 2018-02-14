<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['pass'])) {
$pass = $_GET['pass'];}
if (isset($_GET['cid'])) {
$cid = $_GET['cid'];}
if (isset($_GET['msg'])) {
$msg = $_GET['msg'];}
$file = fopen("messages.ac", "a");
fwrite($file,$cid."☺".$id."☺".$msg."\n");
fclose($file);
echo "Sent";
?>