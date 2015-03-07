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
$result = mysql_query("SELECT `filmy`,`status`, `kwota` FROM `zamowienia` WHERE `id_osoby`='$idu'"); 
$i=0;
while($row = mysql_fetch_array($result)) {
	$i=++$i;  

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
 
 
   /// id_usera zalogowanego uzytkownika 
$login2=$_SESSION['user'];
$sql2 = mysql_query("SELECT `id_uzytkownika` FROM `uzytkownicy1` WHERE `email` = '$login2'");  
$row = mysql_fetch_array($sql2);
$idu=$row['id_uzytkownika'];
?>

</body>
</html>