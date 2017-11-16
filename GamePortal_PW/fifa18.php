<?php
	$conectare2=mysqli_connect("localhost","root","","poze_reviews");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - FIFA18
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">FIFA 18</p>
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
					<h2 style="font-size:20px; color: black; text-indent:20px; box-sizing: content-box; background: rgba(244, 252, 251,.7);"> FIFA 18, ca și predecesorii săi, vine cu o selecție impresionantă de moduri de joc. Indiferent pentru care motiv iubești sportul acesta, vei găsi, cu siguranță, în FIFA 18, exact ce-ți dorești. Fie că vorbim despre carieră, episodul următor din The Journey, celebrul FIFA Ultimate Team sau de confruntările online cu prietenii de pe PlayStation Network, FIFA 18 are câte ceva pentru fiecare.<br><br>
						Pe lângă The Journey, FIFA 18 te așteaptă cu moduri de joc binecunoscute și extrem de populare, dar care în mare parte au rămas așa cum le știam. Acesta nu este un lucru rău, deoarece oricum nu aveau nevoie de prea multe schimbări. În Career a fost implementat un nou sistem e transferuri bazat pe secvențe cinematice și pe libertatea de decizie a jucătorului. Astfel, atunci când negociem un contract avem posibilitatea de a participa la o conversație scriptată, dar care poate duce la diferite rezultate, în funcție de AI-ul managerului…<br><br>
						Se pare că cei de la Electronic Arts au ajuns în sfârșit la o înțelegere cu Federația Română de Fotbal și în FIFA 18, pe lângă vestitul Hagi pentru FIFA Ultimate Team a fost inclusă oficial naționala României, cu echipamentele actualizate, stemă corectă și cu doi dintre cei mai de succes jucători care par rupți din realitate. Pe lângă echipa tricolorilor, acum avem plăcerea de a vedea în tribune suporterii naționalei, care sunt îmbrăcați în tricourile echipei, care-i încurajează pe băieți și care flutură steaguri și bannere oficiale. În cadrul evenimentului de lansare am vizionat un trailer pentru echipa națională, dar se pare că nu este disponibil pentru toată lumea, momentan…<br><br>
						FA a avut mereu un gameplay specific și original, o combinație între simulare și arcade care a prins extrem de bine la fani. Atunci când vreau să petrec câteva minute pe PS4, mă îndrept către FIFA, pentru că îmi place ușurința cu care pot intra într-un meci și accesibilitatea controalelor.  În FIFA 18, am observat schimbări serioase pe partea de gameplay. Jucătorii celebri, precum Ronaldo sau Messi au acum propriul stil de joc, cu mișcări caracteristice și animații exclusive, iar restul coechipierilor par și ei diferiți în felul lor, lăsându-ți senzația că fiecare se poate controla diferit.<br><br>
						Meciurile sunt intense, cu reprize de foc, cu jucători care se bat pentru fiecare minge, iar atunci când lucrurile îți ies așa cum îți dorești, asiști la un adevărat spectacol. Tempoul este mai alert, pasele se leagă mai bine, șuturile par mai puternice, iar șansele de a centra în careu, pentru ca apoi să marchezi un gol pentru care ai alergat 5 minute sunt acum mult mai reale. S-a lucrat și la AI-ul coechipierilor, aceștia se demarchează acum rapid pentru a te ajuta și sunt mai mereu la locul potrivit, însă acest lucru poate duce și la un rezultat pe care nu ți-l dorești, dacă ești prins de un contraatac fulger. Probabil că ți-ai dat seama la ce mă refer, atunci când toți jucătorii se află în jumătatea adversă de teren este extrem de ușor să rămâi fără apărare și oameni de mijloc… Din păcate, nici portarii nu sunt tocmai străluciți, iar executarea loviturilor libere a rămas la fel de anevoioasă și fructificarea lor aproape imposibilă, pentru mine cel puțin.<br><br>
						Sistemul de iluminare din FIFA 18 este absolut fantastic, indiferent că ne uităm la razele de soare răzlețe care mângâie fețele pline de concentrare ale fotbaliștilor sau la lumina rece, necruțătoare, a reflectoarelor strălucind în tribune. Umbrele au primit și ele extra atenție, iar prezentarea de la început meciurilor este ruptă din realitate.<br><br>
						n concluzie, FIFA 18 reprezintă încă un pas în față pentru această serie îndrăgită de peste zeci sau poate chiar sute de milioane de fani din întreaga lume. Noutățile aduse în ediția de anul acesta sunt binevenite, iar noile mecanici de joc îi oferă o notă de inovație și-i crește rejucabilitatea.<br><br>
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
								$sql2="SELECT * FROM images WHERE cale='imagini/fifa18gameplay1.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/fifa18gameplay2.jpg'";
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