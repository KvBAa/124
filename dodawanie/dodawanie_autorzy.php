<?php
	echo "<table  class=\"wpis\">";
	include './polaczenie.php';
	echo "<tr><td class=\"medium\">Imie</tr></td>";
	echo "<tr><td class=\"small\"><input class=\"wpis\" type=\"text\" name=\"imie\" placeholder=\"Podaj imię\"/></tr></td>";
	echo "<tr><td class=\"medium\">Nazwisko</tr></td>";
	echo "<tr><td class=\"small\"><input class=\"wpis\" type=\"text\" name=\"nazwisko\" placeholder=\"Podaj nazwisko\"/></tr></td>";
	echo "<tr><td class=\"medium\">Data Urodzenia</tr></td>";
	echo "<tr><td class=\"small\"><input class=\"wpis\" type=\"date\" name=\"data_ur\" /></tr></td>";
	echo "<tr><td class=\"medium\">Notatka</tr></td>";
	echo "<tr><td class=\"small\"><textarea class=\"wpis\" name=\"notka\" cols=\"20\" rows=\"10\" placeholder=\"tutaj wpisz cos\"></textarea></tr></td>";
	echo "<input type='hidden' name='wpisywanie' value='autorzy'>";
	echo "<tr><td class=\"small\"><input type=\"submit\" value=\"Dalej\"></tr></td>";
	echo "</table>";
?>