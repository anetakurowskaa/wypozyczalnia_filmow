<?php session_start();
     require_once('db.php');
       
?>

<!DOCTYPE html>
<html lang="pl">
<body>
<table class="table table-hover">    
		<tr>
		
            		<td><h4>Id</h4></td>
            		<td><h4>Email</h4></td>
            		<td><h4>haslo</h4></td>
    		</tr>


<?php
$result = mysql_query("SELECT `id_uzytkownika`, `email`,`haslo` FROM `uzytkownicy1`"); 
$i=0;
while($row = mysql_fetch_array($result)) {
	$i=++$i;  
	echo ("<tr class=\"text-left\">");
    	print("<td>");
	echo $row['id_uzytkownika'];
	print("</td>");
   	 print("<td>");
 	echo $row['email'];
 	print("</td>");
    	print("<td>");
 	echo $row['haslo'];
 	print("</td>");
 	print("<td>");
 
 }
?>

</body>
</html>