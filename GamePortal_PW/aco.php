
<?php
	$conectare2=mysqli_connect("localhost","root","","poze_reviews");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - AC Origins
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Assassin's Creed Origins</p>
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
					<h2 style="font-size:20px; color: black; text-indent:20px; box-sizing: content-box; background: rgba(244, 252, 251,.7);"> Acțiunea din Assassin’s Creed Origins se desfășoară în Egiptul Antic și-l are ca personaj principal pe Bayek of Siwa. Povestea jocului este foarte interesantă, punând accentul foarte mult pe moralitate și principii de viață. Firul narativ îl va purta pe Bayek și pe soția acestuia, Aya, într-o aventură plină de mister și secrete.<br><br>
						Assassin’s Creed Origins este mai mult un Role Playing Game, decât Action Adventure, ca predecesorii săi, iar acest lucru se observă din libertatea totală pe care o avem. Toate elementele poveștii sunt foarte bine legate între ele. Avem dorința de răzbunare a celor doi protagoniști, ca urmare a unui eveniment tragic care are loc la începutul jocului, dar mai mult nu vă spun, deoarece încerc să evit spoilerele pe cât posibil. Apoi este scena politică, cu faraoni și alți funcționari corupți, care încurajează asuprirea săracilor de către nobili și prin urmare, apar tot felul de crime nepedepsite. Cineva trebuie să pună capăt acestor nedreptăți și acest cineva este Bayek. Aventura lui este plină de pericole, compasiunea lui este mare pentru cei neajutorați, curajul îi este cea mai ascuțită armă, iar dorința de răzbunare îi dă puterea de a merge mai departe, indiferent de cost.<br><br>
						Cea mai mare schimbare la Assassin’s Creed Origins comparativ cu jocurile precedente apare la gameplay. Aici, majoritatea elementelor de Action Adventure au fost înlocuite cu mecanici de Role Playing Game. Prin urmare, AC Origins seamănă acum mai mult cu Horizon: Zero Dawn și The Witcher 3, decât cu Assassin’s Creed Syndicate.<br><br>
						Este o mai mare plăcere să străbați întinderile acestea pline de istorie și de mister, să descoperi noi secrete, să mergi unde vezi cu ochii. Din orașele aglomerate cu oameni de rând și nobili, în deșertul periculos unde te poate prinde în orice clipă o furtună de nisip mortală, până pe munții înalți, verzi și împăduriți, cu peșteri misterioase, stânci abrupte și râuri furioase. La fiecare pas te pândesc pericole, de la furtunile mai sus menționate, la animalele sălbatice, toate aduse la viață cu talent și pasiune de către cei din echipa de development.<br><br>
						Intrând în pielea lui Bayek și a soției sale Aya, avem oportunitatea de a trăi măcar pentru câteva ore în fiecare zi, în această epocă înconjurată de istorie. Majoritatea personajelor importante și a construcțiilor celebre au primit atenție totală. Vom cunoaște faraoni, vom explora piramide, vom vizita Sfinxul și vom merge cu barca pe Nil. Lumea înconjurătoare este plină de viață și de pericole. De la crocodilii care-și fac veacul pe malul Nilului, la leii care vânează pe stânci, fiecare clipă în Assassin’s Creed Origins este frumoasă, dar poate deveni și ultima…<br><br>
						Assassin’s Creed Origins este un joc excelent, care deși păstrează rețeta pe care o îndrăgim cu toții, aduce atât de multe elemente noi încât pare un reboot al seriei. Dacă-ți place seria, dacă ești pasionat de Egiptul Antic și dacă vrei să petreci zeci de ore luptând în primele confruntări dintre Asasini și Templieri, atunci nu ai voie să ratezi acest titlu.
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
								$sql2="SELECT * FROM images WHERE cale='imagini/acogameplay1.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/acogameplay2.jpg'";
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