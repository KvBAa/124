<?php
	switch($_GET['opcja'])
	{
		case "autorzy";
			include 'dodawanie/dodawanie_autorzy.php';
			break;
		case "klienci";
			include 'dodawanie/dodawanie_klienci.php';
			break;
		case "ksiazki";
			include 'dodawanie/dodawanie_ksiazki.php';
			break;
	}
?>