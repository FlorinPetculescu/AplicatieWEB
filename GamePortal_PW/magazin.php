<?php
	require("conectarePhotos.php");
	//daca este apasat butonul VINDE
	if(isset($_POST['Vinde'])){
		//calea pentru a stoca imaginea
		$target="images/".basename($_FILES['image']['name']);
		$nume=$_POST['nume'];
		$prenume=$_POST['prenume'];
		$telefon=$_POST['telefon'];
		$image=$_FILES['image']['name'];
		$pret=$_POST['pret'];
		$text=$_POST['text'];
		$sql="INSERT INTO images (nume,prenume,telefon,image,pret,text) VALUES ('$nume','$prenume','$telefon','$image','$pret','$text')";
		mysqli_query($conectare,$sql);
		//header("Location: magazin.php?info=succes");
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg="Image uploaded succesfully";
		}
		else
		{
			$msg="Oops!Ceva nu merge bine!";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal-Magazin
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Pune un anunț...</p>	
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
					<form method="POST" action="magazin.php" enctype="multipart/form-data">
						<input type="text" name="nume" placeholder="Nume">
						<br><br>
						<input type="text" name="prenume" placeholder="Prenume">
						<br><br>
						<input type="text" name="telefon" placeholder="Telefon">
						<br><br>
						<input type="text" name="pret" placeholder="Preț">
						<br><br>
						<input type="file" name="image" style="margin:15px auto;">
						<br><br>
						<textarea name="text" placeholder="Descrieți produsul..."></textarea>
						<br><br>
						<button name="Vinde">Vinde</button>
					</form>
					<?php
						$sql="SELECT * FROM images ORDER BY id DESC";
						$result=mysqli_query($conectare,$sql);
						while($row=mysqli_fetch_array($result)){
							echo "<div id='img_div'>";
							echo "<img src='images/".$row['image']."' style='width:210px; border-radius:20px; display:block; margin: 0 auto;' >";
							echo "<p id='img_p'>".$row['text']."</p>";
							echo "<p id='pretProdus'>".$row['pret']." RON"."</p>";
							echo "<p id='numarTelefon'>"."Sună-l pe ".$row['prenume'].": ".$row['telefon']."</p>";
							echo "</div>";
						}
					?>
				</div>
			</div>
		</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy GameField 2017</h1>
		</footer>
	</body>
</html>
