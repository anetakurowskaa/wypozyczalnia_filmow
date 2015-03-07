<?php session_start();
     require_once('db.php');
     require_once('index.php');  
?>
<?php
    //$id=$_SESSION['user'];
          $login2=$_SESSION['user'];
          $sql2 = mysql_query("SELECT `id_uzytkownika` FROM `uzytkownicy1` WHERE `email` = '$login2'");  
          $row = mysql_fetch_array($sql2);
          $idu=$row['id_uzytkownika'];
    $result = mysql_query("SELECT `filmy`,`status`,`kwota` FROM `zamowienia` WHERE `id_osoby`='$idu'");
echo '<div class="table-responsive">          
      <table class="table table-hover">
        <thead>
          <tr>
            <th>L.p</th>
            <th>Tytuly</th>
            <th>Kwota</th>
            <th>Ogladaj</th>
            <th>Status realizacji</th>
          </tr>
        </thead>';
$licznik=1;
  while ( $film = mysql_fetch_row($result) ) {
     echo'
        <tbody>
          <tr>
            <td>'.$licznik.'</td>
            <td>'.$film[0].'</td>
            <td>'.$film[2].'</td>
          </tr>
        </tbody'
          
     
       }
?>