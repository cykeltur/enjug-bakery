<?php
$connect = mysql_connect("localhost","user","");
if($connect) {
    echo "Connected";
} else {
    echo "Problem";
}
?>