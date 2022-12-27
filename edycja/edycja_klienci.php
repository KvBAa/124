<?php
	include './dbcon.php';
	$tabela = "users";
	$temp = $_GET['numer_klienta'];
	$zapytanie="SELECT * FROM $tabela WHERE user_id = $temp;";
	$wynik=mysqli_query($con,$zapytanie);
	$row = mysqli_fetch_array($wynik);
	$imie = $row['name'];
	$login = $row['username'];
	$haslo = $row['password'];
	echo "<table>";
	echo"<tr><td class = \"medium\">Imie</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"name\" value = \"$imie\"/></tr></td>";
	echo"<tr><td class = \"medium\">Login</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"username\" value = \"$login\"/></tr></td>";
	echo"<tr><td class = \"medium\">Hasło</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"password\" value=\"Podaj hasło\"/></tr></td>";
	echo "<input type=\"hidden\" name =\"edycja_kl\" value=\"$temp\">";
	echo "<tr><td class = \"medium\"><input class=\"wpis\" type=\"submit\" value=\"Zapisz\"></tr></td>";
	echo "</table>";
	mysqli_close($con);
?>