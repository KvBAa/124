<?php
	include('./dbcon.php');
	$tabela = "users";
	$imie = $_GET['name'];
	$login = $_GET['username'];
	$login = $_GET['password'];
	$id = $_GET['edycja_kl'];
	$zapytanie = "UPDATE `users` SET `name`='$imie',`username`='$login' ,`password`='$password 'WHERE `user_id` = $id";
	$wynik=mysqli_query($con,$zapytanie);
	mysqli_close($con);
?>