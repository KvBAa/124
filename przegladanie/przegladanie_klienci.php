<?php
	$tabela = "klienci";
	$zapytanie="SELECT * FROM $tabela;";
	$wynik=mysqli_query($sql,$zapytanie);
	echo "<section>";
	echo "<table class=\"przeglad\">";
	echo "<tr><td class = \"medium\">ID_KLIENTA</td><td class = \"medium\">IMIE</td><td class = \"medium\">NAZWISKO</td><td class = \"medium\">LOGIN</td><td class = \"medium\">HASŁO</td></tr>";
	while($row = mysqli_fetch_array($wynik))
	{
		echo "<tr><td class = \"small\">";
		echo $row['id_klienta'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['imie'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['nazwisko'];
		echo "</td>";		
		echo "<td class = \"small\">";
		echo $row['login'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['haslo'];
		echo "</tr></td>";
	}
	echo "<tr><td class=\"small\"><input type=\"submit\" value=\"Powrót\"></tr></td>";
		echo "</table>";
	echo "</section>";
?>