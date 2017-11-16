<?php
	$conectare=mysqli_connect("localhost","root","","slider_si_noutati");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Bine ai venit pe GamePortal!</p>	
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
			<div class="sectiune_text">
				<div class="container">
					<h1>GamePortal - Game Reviews și Platforme de Gaming</h1>
					<p style="text-shadow: 1px 1px #1642e0;">Cauți un loc unde să vezi review-uri la cele mai noi jocuri apărute? Ți-ai pus vreodată întrebarea care platformă de gaming e mai bună? Ai nimerit în locul potrivit. Bine ai venit pe GamePortal!</p>
				</div>
			</div>
			<div class="slider">
				<div class="container">	
					<figure>
						<div class="slide">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/fc5slider.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><img src="<?php echo $row['cale'];?>"></a>
						</div>
						<div class="slide">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/acoslider.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><img src="<?php echo $row['cale'];?>"></a>
						</div>
						<div class="slide">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/nfspaybackslider.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><img src="<?php echo $row['cale'];?>"></a>
						</div>
						<div class="slide">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/destiny2slider.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><img src="<?php echo $row['cale'];?>"></a>
						</div>
						<div class="slide">
							<?php 
								$sql="SELECT * FROM images WHERE cale='imagini/codWWIIslider.jpg'";
								$res=mysqli_query($conectare,$sql);
								$row=mysqli_fetch_array($res);  
							 ?><img src="<?php echo $row['cale'];?>"></a>
						</div>
					</figure>
				</div>
			</div>
		</section>
		<br><br>
		<section>
			<div class="articole_video">
				<div class="container">
					<header>
						<div class="block">
         					<div class="head">
         						<div class="head-cnt"> <a href="#" class="view-all">view all</a>
					 				<h3 style="font-style: italic; color: yellow; text-shadow: 3px 3px black;">Top Videos</h3>
					 			</div>
					 		</div>
					 	</div>
					</header>
					<article>
						<p style="text-shadow: 1px 1px #1642e0;">Urmăriți gameplay din GTAV.</p>
						<div class="video1"></div>	
							<div class="container">	
								<iframe width="560" height="315" src="https://www.youtube.com/embed/C2Iq12xbeQs" frameborder="0" allowfullscreen></iframe>
							</div>				
					</article>
					<article>
						<p style="text-shadow: 1px 1px #1642e0;">Urmăriți gameplay din Battlefield 1.</p>
						<div class="video1"></div>	
							<div class="container">	
								<iframe width="560" height="315" src="https://www.youtube.com/embed/ausI6um3ZdY" frameborder="0" allowfullscreen></iframe>
							</div>				
					</article>
				</div>
			</div>
		</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy - Toate drepturile rezervate de GamePortal 2017</h1>
		</footer>
		<script type="text/javascript" src="particles.js"></script>
		<script type="text/javascript" src="app.js"></script>
	</body>
</html>