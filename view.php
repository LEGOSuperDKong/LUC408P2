<html>
<head>
<meta charset="UTF-8">
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['password'])) {
$password = $_GET['password'];}
if (isset($_GET['cid'])) {
$cid = $_GET['cid'];}
echo '<script>url = "viewer.php?id='.$id.'&cid='.$cid.'&password='.$password.'";</script>';
?>
<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
<div id="contx"></div>
<script>
function rl(text) {
    var exp = /(\b(https?|ftp|file):\/\/([-A-Z0-9+&@#%?=~_|!:,.;]*)([-A-Z0-9+&@#%?\/=~_|!:,.;]*)[-A-Z0-9+&@#\/%=~_|])/ig;
    return text.replace(exp, "<a href='$1' target='_blank'>$3</a>");
}
function getcont(){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    //this.responseText = decodeURI(this.responseText);
    con = rl(this.responseText);
    cony = rl(this.responseText);
    document.getElementById("contx").innerHTML = con;
}
};
xhttp.open("GET", url, true);
xhttp.send();
}
function update_content(){
    //second time on.
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    //this.responseText = decodeURI(this.responseText);
    console.log(this.responseText);
    conx = rl(this.responseText);
    if (conx != cony){
        cony = conx;
        document.getElementById("contx").innerHTML = conx;
        update_pos();
    }
}
};
xhttp.open("GET", url, true);
xhttp.send();
}
function update_pos(){
    //code here to scroll to bottom.
    $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");
    
}
getcont();
update_pos();
setInterval(update_content, 1000);
</script>
</body>
</html>
