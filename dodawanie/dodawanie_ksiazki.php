<?php
	include './polaczenie.php';
	$tabela = "autorzy";
	$zapytanie="SELECT * FROM $tabela;";
	$wynik=mysqli_query($sql,$zapytanie);
	echo "<section>";
	echo "<table>";
	echo "<tr><td class=\"medium\">Tytuł</tr></td>";
	echo"<tr><td><input class=\"wpis\" type=\"text\" name=\"tytul\" placeholder=\"Podaj tytuł\"/></tr></td>";
	echo "<tr><td class=\"medium\">Autor</tr></td>";
	echo"<tr><td><select name=\"id_autora\" />";
	while($row = mysqli_fetch_array($wynik))
	{
		echo"<option value=\"".$row['id_autora']."\">";
		echo $row['imie']." ".$row['nazwisko'];
		echo"</option>";
	}
	echo "</select></tr></td>";
	echo "<tr><td class=\"medium\">ISBN</tr></td>";
	echo"<tr><td><input class=\"wpis\" type=\"text\" name=\"isbn\" placeholder=\"Podaj ISBN\"/></tr></td>";
	echo "<tr><td class=\"medium\">Cena</tr></td>";
	echo"<tr><td><input class=\"wpis\" type=\"text\" name=\"cena\" placeholder=\"Podaj cenę\"/></tr></td>";
	echo "<tr><td class=\"medium\">Ilość</tr></td>";
	echo"<tr><td><input class=\"wpis\" type=\"number\" name=\"ilosc\" placeholder=\"Podaj ilość\"/></tr></td>";
	echo "<tr><td class=\"medium\">Stawka VAT</tr></td>";
	echo"<tr><td><select name=\"stawka_vat\">";
	echo"<option value=\"0\">0%</option>";
	echo"<option value=\"0.03\">3%</option>";
	echo"<option value=\"0.05\">5%</option>";
	echo"<option value=\"0.23\">23%</option>";
	echo"</select></tr></td>";
	echo"<tr><td><input type='hidden' name='wpisywanie' value='ksiazki'></tr></td>";
	echo"<tr><td><input type=\"submit\" value=\"Dalej\"></tr></td>";
	echo"</table>";
?>