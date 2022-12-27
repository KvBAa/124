<?php
	include'polaczenie.php';
	$tabela = "faktury";
	$total = $_GET['cena'];
	$zakup = $_GET['zakup'];
	$zapytanie="INSERT INTO $tabela SET id_faktury='', id_klienta='$session_id', id_ksiazek='$zakup',cena='$total';";
	$wynik=mysqli_query($sql, $zapytanie);
?>