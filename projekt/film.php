<?php session_start();
     require_once('db.php');
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
<!--
<table class="table table-hover">    
		<tr><h2>ID</h2></tr>
         		<tr><h4>Opis</h4></tr>
         		<tr><h4>Aktorzy</h4></tr>
            		<tr><h4>Cena</h4></tr>
-->    		


<?php
$result = mysql_query("SELECT `id`, `opis`, `aktorzy`,`cena` FROM `filmy` where id='" . $_GET['id'] . "'"); 

$i=0;
while($row = mysql_fetch_array($result)) {
	$i=++$i;  
	echo  ("<img src=\"okladki/");
    echo $row['id'];
    echo (".jpg\" width=\"20%\" height=\"20%\" />");
	echo ("<tr class=\"text-left\">");
    	print("<td> <br>Opis filmu: <br>");
	echo $row['opis'];
	print("</td>");
   	 print("<td><br><br>Główni aktorzy: <br>");
 	echo $row['aktorzy'];
 	print("</td>");
    	print("<td> <br><br>Cena wypożyczenia: <br>");
 	echo $row['cena'];
 	print("</td>");
 	print("<td><br><br>");
 
 }
 
 
     if ($_SESSION['auth'] == TRUE)
    {
     echo '<a href="recenzja.php"> Dodaj recenzję</a> <br><br>';
    
    }
    
?>

    <form action="wypozycz.php" method="post">
			<input type="submit" value="Wypożycz" class="btn btn-inverse"/>
		</form>	
  

  
</body>
</html>