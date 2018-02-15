<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['pass'])) {
$password = $_GET['pass'];}
$file = fopen("conversations.ac", "r");
while(!feof($file)) {
$line = fgets($file);
$line = str_replace("\n","",$line);
if($line != ""){
$arr = explode("☺",$line);
$first = 1;
if (strpos($arr[2], '%'.$id.'%') !== false) {
    if ($first == 1){
        echo '<button type="button" style="margin-left:10px;margin-bottom:10px;" title="'.str_replace("%",",",$arr[2]).'" class="btn btn-secondary" onclick="switchchat('.$arr[0].')">';
        echo $arr[1];
        echo "</button><br/>";
        $first = 0;
    }else{
    echo '%'.$arr[0];}
}}
}
fclose($file);
?>