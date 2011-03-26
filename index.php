<?php
$dbhost = 'localhost';
$dbuser = 'cagdasca_user';
$dppass = '123asd';
$db = 'cagdasca_teknocraft'

$dbh = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to MySQL server");
$my_db = @mysql_select_db($db) or die("Unable to select database");

function test(){
echo "benim adim dunya";
}
?>
