<?php
	$tabela = "autorzy";
	$zapytanie="SELECT * FROM $tabela;";
	$wynik=mysqli_query($sql,$zapytanie);
	echo "<section>";
	echo "<table class=\"przeglad\">";
	echo "<tr><td class = \"medium\">ID AUTORA</td><td class = \"medium\">IMIE</td><td class = \"medium\">NAZWISKO</td><td class = \"medium\">DATA URODZENIA</td><td class = \"medium\">NOTKA</td></tr>";
	while($row = mysqli_fetch_array($wynik))
	{
		echo "<tr><td class = \"small\">";
		echo $row['id_autora'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['imie'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['nazwisko'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['data_ur'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['notka'];
		echo "</tr></td>";
	}	
	echo "<tr><td><input class = \"wpis\"type=\"submit\" value=\"Powrót\"></tr></td>";
	echo "</table>";
	echo "</section>";
?>