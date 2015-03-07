<?php session_start();
     require_once('db.php');
       
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scal e=1">
	<title>Wypożyczalnia filmów</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/simpleCart.js"></script>
</head>

<body>

<div class="container">
	<div class="page-header">
		<h1>Wypożyczalnia filmów</h1>
	</div>
</div>

<div class="navbar navbar-inverse">
	 <div class="container-fluid">
 
		<div class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<ul class="nav nav-tabs">
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="onas.php">O nas</a></li>
				<li><a href="filmy.php">Filmy</a></li>
				<li><a href="koszyk.php">Koszyk</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
			
			<meta URL=index.php"><URL=index.php">
		</div>
	</div>
</div>

<center><big>REJESTRACJA</big></center>

<!--rejestracja uzytkownika-->
<?php

    	function filtrowanie($zmienna)
	{
      //usunięcie "/"
	    if(get_magic_quotes_gpc())
	        $zmienna = stripslashes($zmienna); 

		// usunięcie " ", niebezpiecznych znaków, tagów html
	    return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
	}
	
	if (isset($_POST['rejestracja2']))
	{
    $emailr = filtrowanie($_POST['emailr']);
		$haslor1 = filtrowanie($_POST['haslor1']);
		$haslor2 = filtrowanie($_POST['haslor2']);


		// sprawdzenie istnienia loginu w bazie
		if (mysql_num_rows(mysql_query("SELECT `email` FROM `uzytkownicy1` WHERE `email` = '".$emailr."';")) == 0)
		{
      // sprawdzenie czy hasła są takie same
			if ($haslor1 == $haslor2) 
			{
				mysql_query("INSERT INTO `uzytkownicy1` (`email`, `haslo`)
					VALUES ('".$emailr."', '".sha1($haslor1)."');");

				echo "Konto utworzone!";
                echo '<meta http-equiv="refresh" content="2; URL=index.php">';
			}
			else echo "Hasła różnią się";
           
		}
		else echo "Podany e-mail już jest w bazie";
       
	}
?>

<form method="POST" action="rejestracja2.php">
  E-mail: <input type="text" name="emailr">
	Hasło: <input type="password" name="haslor1">
	Powtórz hasło: <input type="password" name="haslor2">
	
	<input type="submit" value="Utwórz konto" name="rejestracja2"class="btn btn-inverse">
	</form>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>