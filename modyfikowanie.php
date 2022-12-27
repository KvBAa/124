<?php
	switch($_GET['opcja'])
	{
		case "autorzy";
			include 'modyfikowanie/modyfikowanie_autorzy.php';
			break;
		case "klienci";
			include 'modyfikowanie/modyfikowanie_klienci.php';
			break;
		case "ksiazki";
			include 'modyfikowanie/modyfikowanie_ksiazki.php';
			break;
	}
?>