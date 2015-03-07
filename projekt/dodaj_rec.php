<?php session_start();
     require_once('db.php');
      require_once('index.php');   
?>
<?php


        $id=$_GET['id']; 
        $rec=$_POST['content']; 
          //$login=$_SESSION['user'];  
          $login2=$_SESSION['user'];
          $sql2 = mysql_query("SELECT `id_uzytkownika` FROM `uzytkownicy1` WHERE `email` = '$login2'");  
          $row = mysql_fetch_array($sql2);
          $idu=$row['id_uzytkownika'];

  mysql_query("INSERT INTO `recenzje` VALUES ('', '$idu','','$rec')") or die("BLAD");
  mysql_query("UPDATE `filmy` SET `recenzja`=`recenzja`+1 WHERE `id`='$id'"); # zwiekszenie ilosci recenzji danego filmu
  
                echo "Recenzja dodana!";
                
             //    $result = mysql_query("SELECT `id` FROM `filmy` where id='" . $_GET['id'] . "'");
            // echo '<meta http-equiv="refresh" content="2; URL=film.php?id=' . $result'';
              // echo "<br/>" ,  $_SERVER['HTTP_REFERER'];
?>