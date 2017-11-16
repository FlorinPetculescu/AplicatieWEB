<?php

$conectare=mysqli_connect('localhost','root', '', 'comentarii');

if(!$conectare){
	die("Conectarea la baza de date nu a reusit!");
}

?>