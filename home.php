<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class = "tytul"><a href="index.php"><img src="./tytul.png"></a><a class="logout" href="logout.php">Wyloguj się</a></br></section>
	
		<?php
			echo "<section class=\"vertical\">";
			echo "<form action=\"\" method=\"get\">";
			include 'polaczenie.php';
			
			if(isset($_GET['wpisywanie']))
			{
				switch($_GET['wpisywanie'])
				{
					case 'autorzy':
					include './wpisywanie/wpisywanie_autorzy.php';
					break;
					case 'klienci':
					include './wpisywanie/wpisywanie_klienci.php';
					break;
					case 'ksiazki':
					include './wpisywanie/wpisywanie_ksiazki.php';
					break;
				}
				
			}
			elseif(isset($_GET['numer_autora']))
			{
				include('./edycja/edycja_autorzy.php');
			}
			elseif(isset($_GET['numer_ksiazki']))
			{
				include('./edycja/edycja_ksiazki.php');
			}
			elseif(isset($_GET['numer_klienta']))
			{
				include('./edycja/edycja_klienci.php');
			}
			
			elseif(isset($_GET['edycja_a']))
			{
				include('./edycja/wpis_autorzy.php');
			}
			elseif(isset($_GET['edycja_ks']))
			{
				include('./edycja/wpis_ksiazki.php');
			}
			elseif(isset($_GET['edycja_kl']))
			{
				include('./edycja/wpis_klienci.php');
			}
			if(!isset($_GET['opcja']) and !isset($_GET['akcja']) and !isset($_GET['numer_autora']) and !isset($_GET['numer_ksiazki']) and !isset($_GET['numer_klienta']))
			{
				echo "<table class = \"wybor\">";
				echo "<th><tr><td class=\"big\">WYBIERZ OPCJĘ</td></tr></th>";
				echo "<tr><td class=\"medium1\"><input class=\"wpis\" type=\"submit\" name=\"opcja\" value=\"autorzy\"/></tr></td>";
				echo "<tr><td class=\"medium1\"><input class=\"wpis\"  type=\"submit\" name=\"opcja\" value=\"klienci\"/></tr></td>";
				echo "<tr><td class=\"medium1\"><input class=\"wpis\"  type=\"submit\" name=\"opcja\" value=\"zamowienia\"/></tr></td>";
				echo "<tr><td class=\"medium1\"><input class=\"wpis\"  type=\"submit\" name=\"opcja\" value=\"ksiazki\"/></tr></td>";
				echo "</section>";
				echo "</table>";
			}
			elseif(isset($_GET['opcja']) and !isset($_GET['akcja']))
			{
				if($_GET['opcja'] == 'zamowienia')
				{
					echo "<table class = \"wybor\">";
					$opcja = $_GET['opcja'];
					echo "<input type=\"hidden\" name = \"opcja\" value = \"$opcja\"";
					echo "<tr><td class = \"big\">WYBIERZ KATEGORIĘ</td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"radio\" name=\"akcja\" value=\"nowe\" />Nowe zamówienie</br></td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"radio\" name=\"akcja\" value=\"historia\" />Historia zamówień</br></td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"submit\" value=\"Dalej\"></tr></td>";
				}
				else{
					echo "<table class = \"wybor\">";
					$opcja = $_GET['opcja'];
					echo "<input type=\"hidden\" name = \"opcja\" value = \"$opcja\"";
					echo "<tr><td class = \"big\">WYBIERZ KATEGORIĘ</td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"submit\" name=\"akcja\" value=\"dodawanie\" /></br></td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"submit\" name=\"akcja\" value=\"modyfikowanie\" /></br></td></tr>";
					echo "<tr><td class=\"medium1\"><input type=\"submit\" name=\"akcja\" value=\"przegladanie\" /></br></td></tr>";
				}
				
			}
			elseif(isset($_GET['opcja']) and isset($_GET['akcja']))
			{
				switch($_GET['akcja']) 
				{
				case "dodawanie":
					include './dodawanie.php';
					break;
				case "przegladanie":
					include './przegladanie.php';
					break;
				case "modyfikowanie":
					include './modyfikowanie.php';
					break;
				case "nowe":
					include './nowe_zam.php';
					break;
				case "historia":
					include './hist_zam.php';
					break;
				}
				echo "</table>";
			}
			echo "</table>";
			echo "</form>";
		?>
</body>
</html>