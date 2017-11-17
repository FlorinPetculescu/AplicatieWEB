<?php
	$conectare=mysqli_connect("localhost","root","","slider_si_noutati");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - Noutăți
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Cele mai noi jocuri</p>	
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
			<br><br>
		</section>
		<br><br>
		<section>
			<div class="articole_jocuri">
				<div class="container">
					<header>
						<div class="block">
         						<div class="head">
            						<div class="head-cnt"> <a href="#" class="view-all">view all</a>
            							 <h3 style="font-style: italic; color: yellow; text-shadow: 3px 3px black;">Cele mai noi jocuri</h3>
            						</div>
            					</div>
            			</div>
					</header>
					<article>
					<div class="card">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/fc5.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="games.php?id=1"><img src="<?php echo $row['cale'];?>"></a>
					</div>
						<h1 style="text-align:center; margin-top:5px; text-shadow: 2px 2px #ff0000; padding-bottom:5px;">27.02.2018</h1>
						<h2 style="text-shadow: 2px 2px #ff0000;">Far Cry 5</h2>
						<p style="text-shadow: 1px 1px #1642e0;"> Acțiunea din Far Cry 5 se petrece în Statele Unite ale Americii, compania Ubisoft încercând să creeze o lume guvernată de un fanatic religios, care se autointitulează "The Father".Tu trebuie să lupți împotriva cultului și să începi o mișcare de rezistență. Click pe imagine pentru Review complet.</p>
					</article>
					<article>
					<div class="card">
						<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/aco.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="games.php?id=2"><img src="<?php echo $row['cale'];?>"></a>
					</div>
						<h1 style="text-align:center; text-shadow: 2px 2px #ff0000; margin-top:5px; padding-bottom:5px;">27.10.2017</h1>
						<h2 style="text-shadow: 2px 2px #ff0000;">Assassin's Creed Origins</h2>
						<p style="text-shadow: 1px 1px #1642e0;">Acțiunea jocului se va petrece în Egiptul Antic și suprinde aventurile asasinului Bayek. Călătorește în ținuturile nisipoase ale Egiptului, vizitează piramidele și descoperă originea asasinilor. Click pe imagine pentru Review complet. </p>
					</article>
					<article>
					<div class="card">	
						<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/fifa18.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="games.php?id=3"><img src="<?php echo $row['cale'];?>"></a>
					</div>
						<h1 style="text-align:center; text-shadow: 2px 2px #ff0000; margin-top:5px; padding-bottom:5px;">29.09.2017</h1>
						<h2 style="text-shadow: 2px 2px #ff0000;">FIFA 18</h2>
						<p style="text-shadow: 1px 1px #1642e0;"> Cel mai așteptat joc cu si despre fotbal a sosit pe rafturile magazinelor. După câțiva ani buni în care l-am avut pe coperta jocului pe Lionel Messi, acum a venit timpul să îl vedem pe Cristiano Ronaldo. Click pe imagine pentru Review complet.</p>
					</article>
					<article>
					<div class="card">	
						<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/codWWII.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="games.php?id=4"><img src="<?php echo $row['cale'];?>"></a>
					</div>
						<h1 style="text-align:center; text-shadow: 2px 2px #ff0000; margin-top:5px; padding-bottom:5px;">03.11.2017</h1>
						<h2 style="text-shadow: 2px 2px #ff0000;">Call of Duty WWII</h2>
						<p style="text-shadow: 1px 1px #1642e0;"> Call of Duty WWII surprinde acțiunea în cel de-al Doilea Razboi Mondial și va apărea pe 3 noiembrie pe PS4, XBOX One și PC. Click pe imagine pentru Review complet.</p>
					</article>	
				</div>
				</div>
			</div>
		</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy - Toate drepturile rezervate de GamePortal 2017</h1>
		</footer>
	</body>
</html>