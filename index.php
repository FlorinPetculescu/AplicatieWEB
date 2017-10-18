<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
		<title>GamePortal</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<div class="header">
				<h2>Bine ai venit pe GamePortal!</h2>
				<ul>
					<li><a href="index.php">Acasă</a></li>
					<li><a href="signup.php">Crează cont</a></li>
				</ul>
			</div>
		<img src="imagini/login_bg.png" class="bg_logo">
		<div class="loginBox">
			<img src="imagini/logo.png" class="user_logo">
			<h1>Conecteaza-te!</h1>
			<form method="POST" action="login.inc.php">
				<input type="text" name="username" placeholder="Username"><br><br>
				<input type="password" name="password" placeholder="Parola"><br><br>
				<input type="submit" value="Log In">
			</form>
		</div>
	</body>
</html>