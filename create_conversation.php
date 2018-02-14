<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['pass'])) {
$pass = $_GET['pass'];}#used to authenticate you are indeed the user.
if (isset($_GET['users'])) {
$users = $_GET['users'];}
if (isset($_GET['name'])) {
$name = $_GET['name'];}
function getLines($file)
{
    $f = fopen($file, 'rb');
    $lines = 0;
    while (!feof($f)) {
        $lines += substr_count(fread($f, 8192), "\n");
    }
    fclose($f);
    return $lines;
}
$newid = getLines("conversations.ac")+1;#increments the ids by one.
$file = fopen("conversations.ac", "a");
fwrite($file,$newid."☺".$name."☺".$users."\n");
fclose($file);
echo "Created.";
?>