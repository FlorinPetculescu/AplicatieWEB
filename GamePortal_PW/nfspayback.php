<?php
	$conectare2=mysqli_connect("localhost","root","","poze_reviews");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - NFS Payback
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Need for Speed Payback</p>
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
			<br><br><br>
		</section>
		<br><br>
		<section>
			<div class="lista_jocuri_pagina_reviews">
				<div class="container">
					<h2 style="font-size:20px; color: black; text-indent:20px; box-sizing: content-box; background: rgba(244, 252, 251,.7);"> Need For Speed Payback este cea mai noua aditie seriei ce a devenit sinonim curselor de masini pe PC.
					In general, cand cineva pune mana pe un joc cu masini pentru prima oara, acesta este un NFS.
					Nu sunt cele mai bune jocuri din acest gen. Dar era o vreme cand toata lumea vorbea despre NFS. Chiar si eu am avut o perioada in care abia asteptam sa apara urmatorul.
					Se intampla pana la NFS Shift, care m-a plictisit atat de tare incat am zis ca nu voi mai juca niciodata o asemenea porcarie. Dar iata-ma iar in fata PC-ului minundu-ma de halul in care poti conduce o masina in NFS.
					Dar hai sa continuam sa va povestesc mai multe despre el. Caci desi mi-a parut o gluma proasta la inceput, mi-am dat seama ca l-am judecat gresit.<br><br>
					Masinile arata destul de bine. Insa asta s-a intamplat mereu in orice joc cu masini de la EA. Iar modificarile vizuale pot fi si ele dragute. Dar unele dintre ele sunt absolut hidoase. Oricum, e bine ca poti sa descarci livery-uri concepute de altii si sa nu mai pierzi tu timpul desenand aberatii.<br><br>
					Daca le-ai jucat si pe cele vechi, sunt singur ca iti va placea si asta pentru ca deja ai asteptarile setate.<br><br>
					</h2>
				</div>
		</section>
		<section>
			<br><br>
		</section>
		<section>
			<div class="container">
					<table>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/nfsgameplay1.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/nfsgameplay2.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
					</table>
				</div>
			</div>
		</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy - Toate drepturile rezervate de GameField 2017</h1>
		</footer>
	</body>
</html>