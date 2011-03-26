<?php
$dbhost = 'localhost';
$dbuser = 'cagdasca_user';
$dppass = '123asd';
$db = 'cagdasca_teknocraft'

$dbh = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to MySQL server");
$my_db = @mysql_select_db($db) or die("Unable to select database");

$user = $_POST['uid'];
$heading = $_POST['heading'];
$text = $_POST['tx'];
$tag = $_POST['tag'];
mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to MySQL server");
@mysql_select_db($db) or die("Unable to select database");

$query = "INSERT INTO posts VALUES ('','$user', '$heading', '$text', '$tag')";
mysql_query($query);

mysql_close();
?>

