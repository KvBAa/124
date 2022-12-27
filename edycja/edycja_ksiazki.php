<?php
	include './polaczenie.php';
	$tabela = "ksiazki";
	$temp = $_GET['numer_ksiazki'];
	$zapytanie="SELECT * FROM $tabela WHERE `id_ksiazki` = '$temp';";
	$wynik=mysqli_query($sql,$zapytanie);
	$tabela2 = "autorzy";
	$zapytanie2="SELECT * FROM $tabela2;";
	$wynik2=mysqli_query($sql,$zapytanie2);
	echo "<table class = \"wpis\">";
	echo"<br />";
	$row = mysqli_fetch_array($wynik);
	$tytul = $row['tytul'];
	$isbn = $row['isbn'];	
	$cena = $row['cena'];	
	$ilosc = $row['ilosc'];	
	echo"<br />";
	echo"<tr><td class = \"medium\">Tytuł</td></tr>";
	echo"<tr><td class = \"small\"><input class=\"wpis\"  type=\"text\" name=\"tytul\" value = \"$tytul\"/></td></tr>";
	echo"<tr><td class = \"medium\">ISBN</td></tr>";
	echo"<tr><td class = \"small\"><input class=\"wpis\"  type=\"text\" name=\"isbn\" value = \"$isbn\"/></td></tr>";
	echo"<tr><td class = \"medium\">Autor</td></tr>";
	echo"<tr><td class=\"small\"><select name=\"autor_numer\">";
	while($row2 = mysqli_fetch_array($wynik2))
	{
		echo"<option value=\"".$row2['id_autora']."\">";
		echo $row2['imie']." ".$row2['nazwisko'];
		echo"</option>";
	}
	echo"</select></td></tr>";
	echo"<tr><td class = \"medium\">Cena</td></tr>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"cena\" value = \"$cena\"/></td></tr>";
	echo"<tr><td class = \"medium\">Ilość</td></tr>";
	echo"<tr><td class = \"small\"><input class=\"wpis\"  type=\"number\" name=\"ilosc\" step=\"any\" min=\"0\" value = \"$ilosc\"/></td></tr>";
	echo"<tr><td class = \"medium\">Stawka VAT</td></tr>";
	echo"<tr><td class = \"small\"><select name=\"stawka_vat\">";
	echo"<option value=\"0\">0%</option>";
	echo"<option value=\"0.05\">5%</option>";
	echo"<option value=\"0.07\">7%</option>";
	echo"<option value=\"0.23\">23%</option>";
	echo "</select></td></tr>";
	$numer_ksiazki = $row['id_ksiazki'];
	echo"<input type=\"hidden\" name=\"edycja_ks\" value=\"$numer_ksiazki\"/>";
	echo"<tr><td><input class=\"wpis\"  type=\"submit\" value=\"Zapisz\" /></td></tr>";
	echo "</table>";
?>