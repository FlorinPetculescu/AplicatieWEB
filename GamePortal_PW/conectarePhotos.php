<?php

$conectare=mysqli_connect('localhost','root', '', 'photos');

if(!$conectare){
	die("Conectarea la baza de date nu a reusit!");
}

?>