<?php session_start();
     require_once('index.php');  
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
<!--
<div class="container">
	<div class="page-header">
		<h1>Wypożyczalnia filmów</h1>
		
		<form class="form-inline" name="form-logowanie" action="index.php" method="post">
			<input type="text" class="input-small" name="login" placeholder="e-mail">
			<input type="password" class="input-small" name="password" placeholder="haslo">
			<label class="checkbox">
				<input type="checkbox">Zapamiętaj mnie
			</label>
			<button type="submit" name="zaloguj" class="btn btn-inverse">Zaloguj</button>
		</form>
        <a href="rejestracja.php">Zarejestruj się</a>
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
-->



  	<p>
	Jeżeli mają Państwo pytania lub wątpliwości zachęcamy do skorzystania z poniższego formularza. Odpowiemy na Państwa wiadomość najszybciej jak to będzie możliwe.</br></br>
	</p>
	


		<form action="wyslij.php" method="post">
			Podaj e-mail: </br><input type="text" name="tel" /></br></br>
			Twoja wiadomość: </br><textarea name="content" cols="100" rows="10"></textarea></br></br>
			<input type="submit" value="Wyslij" class="btn btn-inverse"/>
		</form>	

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
