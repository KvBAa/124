<?php
	include'dbcon.php';
	$tabela = "users";
	$imie=$_GET['imie'];
	$login=$_GET['login'];
	$haslo=$_GET['haslo'];
	$haslo = md5($haslo);
	$zapytanie="INSERT INTO $tabela SET user_id='', name='$imie', username='$login', password='$haslo';";
	$wynik=mysqli_query($con, $zapytanie);
?>