
<?php
$dbhost = 'localhost';
$dbuser = 'cagdasca_user';
$dbpass = '123asd';
$db = 'cagdasca_teknocraft';


$conn = mysql_connect($dbhost, $dbuser, $dbpass);// or die("Unable to connect to MySQL server");
if (!$conn) {
    die('Couldnt connect: ' . mysql_error());
}
//echo 'Connection established';

$my_db = @mysql_select_db($db) or die('Unable to select database' . mysql_error());



?>

<html>
	<head>
		<title>Teknocraft</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="main">
			<div id="login">
				<form name="input" action="posta.php" method="post">
					username:<input type="text" name="un" />
					password:<input type="password" name=pw" />	
					<input type="submit" value="login" /></br>
					<a href="signup.php" class="login">new user</a>
				</form>
			</div>
			<div id="header">
				Teknocraft
				<div id="tagline">
					'Always different, always the same'
				</div>
			</div>
			<div id="posts">
				Post1</br>
				Lvorem Ipsum is simply dummy text of the printing and typesetting indu				stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
			</div>
			<div id="footer">Footer <?php echo 'RRR'; ?></div>
		</div>
	</body>
</html>
