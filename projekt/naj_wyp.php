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
	</head>

<body>


<?php
$result = mysql_query("SELECT `id`, `tytul`,`gatunek`,`cena` FROM `filmy` ORDER BY `wypozyczenia` desc LIMIT 10");
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