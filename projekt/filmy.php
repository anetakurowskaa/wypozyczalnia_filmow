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
	<!--
	<title>Wypożyczalnia filmów</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/simpleCart.js"></script>
  -->
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

<div class="navbar navbar-inverse"> 
  <div class="row">
  <div class="col-xs-3"> 
<form action=""  method="post"> 
<select class="form-control" name="gatunek"> 
<option value="1">Wybierz gatunek filmu </option> 
<option value="dramat">dramat</option> 
<option value="komedia">komedia</option> 
<option value="psychologiczny">psychologiczny</option> 
<option value="sadowy">sądowy</option> 
<option value="wojenny">wojenny</option> 
<option value="gangsterski">gangsterski</option>  
<option value="thriller">thriller</option> 
<option value="kryminal">kryminał</option> 
<option value="fantasy_p">fantasy przygodowy</option> 
<input type="submit" value="Wyszukaj" class="btn btn-inverse">
	</form>
</select> 
 </div>
</div>
</div>

<a href="naj_wyp.php">Najczęściej wypożyczane</a>
<br>
<a href="naj_kom.php">Najczęściej komentowane</a>

<div class="table-responsive">
<th ><h3 class="text-center">Lista dostępnych filmów</h3></th>


<?php
$r =($_POST['gatunek']);


if(!empty($r)) {
    
     
        // zapytanie do bazy danych 
            
        $result = mysql_query("SELECT `id`, `tytul`,`gatunek`,`cena` FROM `filmy` WHERE `gatunek` like '%$r%'");
        
                      } 
     else 
        $result = mysql_query("SELECT `id`, `tytul`,`gatunek`,`cena` FROM `filmy`");
  
          
 ?>    
 
  

<table class="table table-hover">    
		<tr>
			<td><h4>ID</h4></td>
            		<td><h4>Tytuł</h4></td>
            		<td><h4>Gatunek</h4></td>
            		<td><h4>Cena</h4></td>
    		</tr>
<?php
//$result = mysql_query("SELECT `id`, `tytul`,`gatunek`,`cena` FROM `filmy`"); //dodane po 'filmy'
$i=0;
while($row = mysql_fetch_array($result)) {
	$i=++$i;  
	echo ("<tr class=\"text-left\">");
    	print("<td>");
	echo $row['id'];
	print("</td>");
   	 print("<td>");
  
 // echo  ("<img src=\"okladki/");
 //   echo $row['id'];
  //  echo (".jpg\" width=\"25%\" height=\"50%\" />");
  echo '<a href=film.php?id=' . $row['id'] . '>' . '<img src=okladki/' . $row['id'] . '.jpg width=80 height=100 />' . '</a>';
  
  
 	echo '<a href=film.php?id=' . $row['id'] . '>' . $row['tytul'] . '</a>';
 	print("</td>");
    	print("<td>");
 	echo $row['gatunek'];
 	print("</td>");
 	print("<td>");
 	echo $row['cena'];
 	print("</td>");
    	print("<td>");
  print("</tr>");
 }
?>

</div>

</body>
</html>
