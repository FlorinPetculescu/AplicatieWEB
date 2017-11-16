<?php
	require("conectareContact.php");
if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['e-mail']) &&
!empty($_POST['sex']) && !empty($_POST['text']) && isset($_POST['nume']) && isset($_POST['prenume'])  && isset($_POST['e-mail']) && isset($_POST['sex']) && isset($_POST['text']))
{
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$e_mail=$_POST['e-mail'];
	$sex=$_POST['sex'];
	$text=$_POST['text'];
	$sql="INSERT INTO contacts (nume,prenume,e_mail,sex,text) VALUES ('$nume','$prenume','$e_mail','$sex','$text')";
	$result=mysqli_query($conectare,$sql);
	echo "<script>alert('Multumim! Mesajul tau va fi analizat si ti se va raspunde pe e-mail.')</script>";
	header("Location: contact.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal-Contact
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Scrie-ne...</p>	
				<form action="../login_system/index.php" style="text-align: right;">
					<input type="submit" value="Log Out">
				</form>
			</header>
			<ul>
					<li><a href="index.php">Acasă</a></li>
					<li><a>Platforme</a>
						<ul>
							<li><a>PS4</a></li>
							<li><a>XBOX ONE</a></li>
							<li><a>PC</a></li>
						</ul>
					</li>
					<li><a>Noutăți</a>
						<ul>
							<li><a href="noutati_jocuri_noi.php">Jocuri noi</a></li>
						</ul>
					</li>
					<li><a href="reviews.php">Reviews</a></li>
					<li><a href="magazin.php">Magazin</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
		</div>
		<section>
			<div class="contact">
				<div class="container">
					<form method="POST" action="contact.php">
						<input type="text" name="nume" placeholder="Nume">
						<br><br>
						<input type="text" name="prenume" placeholder="Prenume">
						<br><br>
						<input type="text" name="e-mail" placeholder="E-mail">
						<br><br>
						<input class="radioform" type="radio" name="sex" value="Masculin">Masculin
						<br><br>
						<input class="radioform" type="radio" name="sex" value="Feminin">Feminin
						<br><br>
						<textarea name="text" placeholder="Inserati textul..."></textarea>
						<br><br>
						<button name="Trimite">Trimite</button>
					</form>
				</div>
			</div>
		</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy GameField 2017</h1>
		</footer>
	</body>
</html>
