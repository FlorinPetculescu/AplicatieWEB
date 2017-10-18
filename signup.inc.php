<?php

require 'conectare.php';

if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
{
	$nume=$_POST['nume'];
	$prenume=$_POST['prenume'];
	$email=$_POST['email'];
	$username=strtolower($_POST['username']);
	$password=$_POST['password'];

	$password_hashed= password_hash($password, PASSWORD_DEFAULT);

	$sql="SELECT username FROM users WHERE username='$username'";
	$result=mysqli_query($conectare,$sql);
	$check=mysqli_num_rows($result);
	if($check>0){
		header("Location: signup.php?info=exista_deja");
		die();
	}
	else
	{
		$sql="INSERT INTO users (nume,prenume,email,username,password) VALUES ('$nume','$prenume','$email','$username','$password_hashed')";
		$result=mysqli_query($conectare, $sql); //trimiterea datelor catre baza de date
		header("Location: signup.php?info=succes");
	}
}
else
{
	header("Location: signup.php?info=eroare");
}
?>