<?php
	$conectare=mysqli_connect("localhost","root","","poze_reviews");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - Reviews
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Reviews</p>
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
			<div class="lista_jocuri_pagina_reviews">
				<div class="container">
					<header>
						<div class="block">
         						<div class="head">
            						<div class="head-cnt">
            							 <h3 style="font-style: italic; color: yellow; text-shadow: 3px 3px black;">Top Reviews</h3>
            						</div>
            					</div>
            			</div>
					</header>
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/fc5.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="fc5.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Far Cry 5</h2>
					</article>
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/aco.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="aco.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Assassin's Creed Origins</h2>
					</article>
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/fifa18.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="fifa18.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">FIFA 18</h2>
					</article>
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/codWWII.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="codWWII.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Call of Duty WWII</h2>
					</article>
				</div>
			</div>
		</section>
		<section>
			<div class="lista_jocuri_pagina_reviews">
				<div class="container">
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/nfspayback.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="nfspayback.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Need for Speed Payback</h2>
					</article>	
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/destiny2.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="destiny2.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Destiny 2</h2>
					</article>	
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/unchartedLL.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="unchartedLL.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">Uncharted- Lost Legacy</h2>
					</article>	
					<article>
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/starwars2.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><a href="starwars2.php"><img src="<?php echo $row['cale'];?>"></a>
						<h2 style="font-style: italic;">StarWars Battlefront 2</h2>
					</article>	
				</div>
			</div>
		</section>
		<footer class="forReviewsOnly">
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy - Toate drepturile rezervate de GameField 2017</h1>
		</footer>
	</body>
</html>