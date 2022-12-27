<?php
	include './dbcon.php';
	$tabela = "users";
	$zapytanie="SELECT * FROM $tabela;";
	$wynik=mysqli_query($sql,$zapytanie);
	echo "<table>";
	echo "<form>";
	echo "<tr><td class = \"medium\">ID KLIENTA</td><td class = \"medium\">IMIE</td><td class = \"medium\">LOGIN</td><td class = \"medium\">HASŁO</td></tr>";
	while($row = mysqli_fetch_array($wynik))
	{
		echo "<tr><td class = \"small\">";
		echo $row['user_id'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['name'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['username'];
		echo "</td>";
		echo "<td class = \"small\">";
		echo $row['password'];
		echo "</td>";
		echo "<td class = \"small\">";
		$numer_klienta = $row['user_id']; 
		echo "<input type = \"submit\" class = \"gray\" name = \"numer_klienta\" value = \"$numer_klienta\">";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "</form>";
	mysqli_close($sql);
?>