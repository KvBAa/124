<?php
	echo "<table class = \"wpis\">";
	echo"<tr><td class = \"medium\">Imie</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"imie\" placeholder=\"Podaj imię\"/></tr></td>";
	echo"<tr><td class = \"medium\">Login</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"text\" name=\"login\" placeholder=\"Podaj login\"/></tr></td>";
	echo"<tr><td class = \"medium\">Hasło</tr></td>";
	echo"<tr><td class = \"small\"><input class=\"wpis\" type=\"password\" name=\"haslo\" placeholder=\"Podaj hasło\"/></tr></td>";
	echo"<tr><td><input type='hidden' name='wpisywanie' value='klienci'></tr></td>";
	echo "<tr><td  class = \"medium\"><input class=\"wpis\" type=\"submit\" value=\"Dalej\"></tr></td>";
	echo "</table>";
?>