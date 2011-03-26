<?php

?>

<html>
	<head>
		<title>Teknocraft</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="main">
			<div id="login">
				Teknocraft signup page	
			</div>
			<div id="header">
				Teknocraft
				<div id="tagline">
					'Always different, always the same'
				</div>
			</div>
			<div id="signup">
				<form name="input" action="signup.php" method="get">
					<table>
						<tr>
							<td>username:</td>
							<td><input type="text" name="un" /></td>
						</tr>
						<tr>
							<td>password:</td>
							<td><input type="password" name="pw" /></td>	
						</tr>
						<tr>
							<td>e-mail:</td>
							<td><input type="text" name="ep" /></td>
						</tr>
					</table>	
					<input type="submit" value="create user" />
				</form>	
			</div>
			<div id="footer">Footer</div>
		</div>
	</body>
</html>
