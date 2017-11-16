<?php
	require("conectareComentarii.php");
if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['comment']) && isset($_POST['nume']) && isset($_POST['prenume'])  && isset($_POST['comment']))
{
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$comment=$_POST['comment'];
	$sql="INSERT INTO comments (nume,prenume,comment) VALUES ('$nume','$prenume','$comment')";
	$result=mysqli_query($conectare,$sql);
	header("Location: fc5.php?info=succes");
}
	
?>
<?php
	$conectare2=mysqli_connect("localhost","root","","poze_reviews");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			GamePortal - Far Cry 5
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="topOfPage">
				<img src="imagini/logo.png" alt="GamePortal logo" style="border-radius: 5px;">	
				<p style="font-style: italic; text-shadow: 1px 1px #1642e0;">Far Cry 5</p>
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
					<h2 style="font-size:20px; color: black; text-indent:20px; box-sizing: content-box; background: rgba(244, 252, 251,.7);">Set in America for the first time, Far Cry 5 offers players total freedom to navigate a serene-looking yet deeply twisted world, as the new junior deputy of fictional Hope County, Montana who becomes embroiled in an attempted takeover of the county by the Project at Eden’s Gate, a doomsday cult. Players will find that their arrival accelerates a years-long silent coup by a fanatical doomsday cult, the Project at Eden's Gate, igniting a violent takeover of the county.<br><br>

					Far Cry 5 will allow players to explore the entire open-world in-game version of Montana alone or in two player co-op. Under siege and cut off from the rest of the world, players will join forces with residents of Hope County and form the Resistance.
					You play a sheriff’s deputy caught up in a war between the US Marshal Service and Hope County’s resident cult leader, Joseph – a man who believes he’s been chosen to protect his followers from a government collapse he believes to be imminent – and his family: brothers Jacob and John and their half-sister, Faith. You won’t be alone, of course. Joining you in the battle for Hope County’s soul are potential allies like Pastor Jerome, whose church has come under fire by Joseph’s group; Mary May, whose father was killed by the cult; and Nick Rye, a pilot and soon-to-be father who wants to follow in the footsteps of his father and grandfather, who both fought for the US.<br><br>
					Ultimately, maybe Far Cry 5’s theme bothers you. Maybe it doesn’t. Maybe in these politically charged times you don’t want your escapist entertainment to remind you of real-world issues. Maybe you don’t care. Either way, Far Cry 5 is almost certainly going to get a reaction out of you. And isn’t that what the last couple numbered Far Cry games have been building towards?
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
								$sql2="SELECT * FROM images WHERE cale='imagini/fc5gameplay1.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
						<td>
							<div class="table_images">
								<?php 
								$sql2="SELECT * FROM images WHERE cale='imagini/fc5gameplay2.jpg'";
								$res2=mysqli_query($conectare2,$sql2);
								$row2=mysqli_fetch_array($res2);  
							 ?><img src="<?php echo $row2['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td>
					</table>
				</div>
			</div>
		</section>
		<section>
			<div class="contact">
				<div class="container">
					<form action="fc5.php" method="POST">
						<input type="text" name="nume" placeholder="Nume">
						<br><br>
						<input type="text" name="prenume" placeholder="Prenume">
						<br><br>
						<textarea name="comment" placeholder="Inserați textul..."></textarea>
						<br><br>
						<button name="trimite">Trimite</button>
					</form>
					<?php
						$sql="SELECT * FROM comments ORDER BY id DESC";
						$getquery=mysqli_query($conectare,$sql);
						while($rows=mysqli_fetch_assoc($getquery))
						{
							$id=$rows['id'];
							$nume=$rows['nume'];
							$prenume=$rows['prenume'];
							$comment=$rows['comment'];
							?>
							<div class="comentarii">
							<?php echo "<p style='color:#62ff32; margin-top:15px; font-size:20px;'>".$nume."&nbsp".$prenume."</p>",'<br />',"<p style='height:50px;background: rgba(17, 69, 137,.5);
								border-radius:15px; padding:10px;'>".$comment."</p>",'<br />';
							?>
							<hr align=left;width=500px;>
							</div>


							<?php
						}
					?>
				</div>
			</div>
		</section>
			</div>
	</section>
		<footer>
			<h1 style="font-style: italic; color: yellow; text-shadow: 2px 2px black;">COPYRIGHT &copy - Toate drepturile rezervate de GameField 2017</h1>
		</footer>
	</body>
</html>