<?php
	switch($_GET['opcja'])
	{
		case "autorzy";
			include 'przegladanie/przegladanie_autorzy.php';
			break;
		case "klienci";
			include 'przegladanie/przegladanie_klienci.php';
			break;
		case "ksiazki";
			include 'przegladanie/przegladanie_ksiazki.php';
			break;
	}
?>