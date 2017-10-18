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
			<h1>Înregistrează-te!</h1>
			<form method="POST" action="signup.inc.php">
				<input type="text" name="nume" placeholder="Nume"><br><br>
				<input type="text" name="prenume" placeholder="Prenume"><br><br>
				<input type="text" name="email" placeholder="E-mail"><br><br>
				<input type="text" name="username" placeholder="Username"><br><br>
				<input type="password" name="password" placeholder="Parola"><br><br>
				<input type="submit" value="Sign Up">
			</form>
		</div>
				<?php
					if(isset($_GET['info']) && $_GET['info']=="succes")
						echo '<p style="text-align: center; font-size:20px;">Contul a fost creat cu succes.</p>';
					else
						if(isset($_GET['info']) && $_GET['info']=="eroare")
							echo '<p style="text-align: center; font-size:20px;">A aparut o eroare.</p>';
						else
							if(isset($_GET['info']) && $_GET['info']=="exista_deja")
								echo '<p style="text-align: center; font-size:20px;">Username deja existent.</p>';
				?>
	</body>
	</html>