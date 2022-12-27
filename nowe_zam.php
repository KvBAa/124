<?php
	$tabela = "ksiazki";
	$tabela1 = "autorzy";
	$zapytanie1 ="SELECT * FROM $tabela1;";
	$zapytanie="SELECT * FROM $tabela ORDER BY id_ksiazki ASC;";
	$wynik=mysqli_query($sql,$zapytanie);
	$wynik1 =mysqli_query($sql,$zapytanie1);
	$row1 = mysqli_fetch_array($wynik1);
	$row = mysqli_fetch_array($wynik);
	$zakup = "";
	if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Przedmiot został już dodany wcześniej, aby zmienić ilość należy usunąć przedmiot i ustawić wymaganą ilość")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Przedmiot usunięty")</script>';
			}
		}
	}
}
?>
<div class="container">
			<br />
			<br />
			<br />
			<br /><br />
			<?php
				$result = mysqli_query($sql, $zapytanie);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="home_user.php?opcja=zamowienia&action=add&id=<?php echo $row["id_ksiazki"]; ?>">
					<div style="border:1px solid #333; background-color: rgba(94,94,94, .7); border-radius:5px; padding:16px;" align="center">

						<h4><?php echo $row["tytul"]; ?></h4>

						<h4> <?php echo $row["cena"]; ?> zł</h4>

						<input type="text" style="font-size:25px; text-align:center; background:none;" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["tytul"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["cena"]; ?>" />

						<input type="submit" name="add_to_cart" style="border: solid 2px white;margin-top:5px;" value="Dodaj do koszyka" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Szczegóły zamówienia</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class = "kup" width="40%">Tytul</th>
						<th class = "kup" width="10%">Ilość</th>
						<th class = "kup" width="20%">Cena</th>
						<th class = "kup" width="15%">Suma</th>
						<th class = "kup" width="5%">Akcja</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td class = "kup"><?php echo $values["item_name"]; ?></td>
						<td class = "kup"><?php echo $values["item_quantity"]; ?></td>
						<td class = "kup"><?php echo $values["item_price"]; ?>zł</td>
						<td class = "kup"><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>zł</td>
						<td class = "kup"><a href="home_user.php?opcja=zamowienia&action=delete&id=<?php echo $values["item_id"]; ?>"><span style="color: white;">Usuń</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td  class = "kup"colspan="3" align="right">Suma</td>
						<td class = "kup" align="right"><?php echo number_format($total, 2); ?>zł</td>
						<td class = "kup"><input type = "submit" style = "color: white; border: none; background-color: none;" name = "zatwierdz" value = "tak"></td>
					</tr>
					
					<?php
					}
					echo "<input type=\"hidden\" name = \"cena\" value = $total>";
					echo "<input type=\"hidden\" name = \"zakup\" value = $zakup>";
					?>
					
				</table>
			</div>
		</div>
	</div>
	<br />