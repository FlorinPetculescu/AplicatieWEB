<?php
	$conectare2=mysqli_connect("localhost","root","","poze_reviews");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - CODWWII
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Call of Duty WWII</p>
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
					<h2 style="font-size:20px; color: black; text-indent:20px; box-sizing: content-box; background: rgba(244, 252, 251,.7);"> Campania Single Player din Call of Duty: WWII începe cu invazia Aliaților din Normandia aka D-Day și urmărește actele de eroism ale soldatului Ronald ”Red” Daniels pe Frontul de Vest. Pe parcursul celor 10 misiuni participăm la cele mai intense confruntări dintre Aliați și naziști, trecând în jurnalul de călătorie bătălii celebre și ajungând într-un final pe malurile fluviului Rin pentru a duce aventura la un sfârșit cât se poate de reușit.<br><br>
						Povestea este emoționantă și oferă un sentiment de imersiune destul de rar întâlnit în jocurile din ziua de azi. Daniels și ceilalți soldați din brigada sa vor lupta necontenit pentru a elibera Europa de sub asuprirea lui Adolf Hitler și în același timp se va lega între ei o camaraderie unică, specifică numai celor care au văzut moartea cu ochii și datorită colegilor au reușit să scape. Pe parcursul celor 7-8 ore de joc gamerul intră și în pielea altor personaje, se bazează pe ajutorul camarazilor, are drept de decizie atunci când întâlnește alți soldați răniți și când îi ies în cale civili, chiar și de naționalitate germană.<br><br>
						Mecanicile de joc din Call of Duty: WWII sunt reminescențe cu cele prezente în primele două titluri ale acestei serii. Cei care erau învățați cu practici de tipul run and gun, apoi cu pauză de 3 secunde pentru a li se regenera viața, se vor trezi extrem de des cu nasul în pământ. Pentru WWII cei de la Sledgehammer Games au introdus MedKit-urile pe care le primim de la camarazi atunci când suntem răniți grav și confruntările trebuie acum abordate din cover.<br><br>
						Motivul principal pentru care Call of Duty se vinde în milioane de exemplare în fiecare an este posibilitatea de a petrece sute sau poate chiar mii de ore online în componentele cooperative sau competitive ale jocului.<br><br>
						Activision Publishing și Sledgehammer Games au reușit să ne aducă cel mai bun Call of Duty din ultimii ani. Campania Single Player bazată pe evenimente cheie din World War II capitalizează pe fundalul unei povești emoționante, cele două componente online, de multiplayer competitiv și cooperativ oferă reprize de gameplay extinse, iar toate acestea sunt împachetate frumos într-o prezentare de excepție. Fan Call of Duty sau nu, WWII merită atenția ta!<br><br>
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
								$sql2="SELECT * FROM images WHERE cale='imagini/codWWIIgameplay1.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/codWWIIgameplay2.jpg'";
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