<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3 style="text-align:center">Zaloguj się do konta</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="LOGIN" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="HASŁO" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
  
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			$password = md5($password);
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{
					$_SESSION['user_id']=$row['user_id'];
					if($row['user_id'] == 1){
						header('location:home.php');
					}
					else{
						header('location:home_user.php');
					}
					
				}
			else
				{
					echo 'Niepoprawna konfiguracja hasła i loginu!';
				}
		}
  ?>
  <div class="">
   <input type="button" class = "info" onclick="alert('W celu utworzenia nowego klienta prosimy o kontakt mailowy na adres jakubpawlowski&#64;woli.edu.pl. Przepraszamy za utrudnienia.')" value="Nowy użytkownik">
  </div>
  
</div>

</body>
</html>