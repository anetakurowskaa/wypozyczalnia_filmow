<?php session_start();
     require_once('db.php');
       
?>

<!DOCTYPE html>
<html lang="pl">
<body>
<!--
<table class="table table-hover">    
		<tr>
		
            		<td><h4>Id</h4></td>
            		<td><h4>Filmy</h4></td>
            		<td><h4>Status</h4></td>
            		<td><h4>Kwota</h4></td>
    		</tr>
-->

<?php
$result = mysql_query("SELECT `id_osoby`, `filmy`,`status`, `kwota` FROM `zamowienia`"); 
$i=0;
while($row = mysql_fetch_array($result)) {
	$i=++$i;  
	echo ("<tr class=\"text-left\">");
    	print("<td><br>Id osoby:   <br>");
	echo $row['id_osoby'];
	print("</td>");
   	 print("<td><br><br>Filmy: ");
 	echo $row['filmy'];
 	print("</td>");
    	print("<td> <br><br>");
 	echo $row['status'];
 	print("</td>");
 	print("<td>");
 echo $row['kwota'];
 	print("</td>");
 	print("<td>");
 }
?>

</body>
</html>