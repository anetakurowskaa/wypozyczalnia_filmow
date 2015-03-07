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
  
<?php
if ($_SESSION['auth'] == FALSE)
  {
  //echo 'Zaloguj się';
  //<form class="form-inline" name="form-logowanie" action="index.php" method="post"> 
  //<button type="submit" name="zaloguj" class="btn btn-inverse">Zaloguj</button>
  echo 'Jeśli nie masz konta' . '<a href="rejestracja2.php"> zarejestruj się.</a></p>';
  //</form>
  } else {
          $id=$_GET['id'];  
          //$login=$_SESSION['user'];  
          $login2=$_SESSION['user'];
          $sql2 = mysql_query("SELECT `id_uzytkownika` FROM `uzytkownicy1` WHERE `email` = '$login2'");  
          $row = mysql_fetch_array($sql2);
          $idu=$row['id_uzytkownika'];
          $cena=mysql_fetch_row( mysql_query("SELECT `cena`,`tytul` from `filmy` WHERE `id`='$idu';"));
          mysql_query("INSERT INTO `zamowienia` VALUES ('$idu','$cena[1]',\"w trakcie\",'$cena[0]');") or die("BLAD");
     mysql_query("UPDATE `filmy` SET `wypozyczenia`=`wypozyczenia`+1 WHERE `id`='$id'"); # zwiekszenie ilosci wypozyczen danego filmu
          
         echo 'Podstawową formą płatności stosowaną przez naszą firmę jest przelew bankowy. <br> Posiadamy konto w Banku X nr konta 00 0000 0000 0000 0000 0000. <br>Terminy płatności to 1 dzień.<br> W przypadku nie wykonania płatności naliczona będzie kara w wysokości 50% ceny wypożyczenia danego filmu';
         
         
            $adres = $_SESSION['user'];
            $tytul = "Wypożyczalnia filmów-informacje dotyczące wypożyczenia";
            $wiadomosc = "Podstawową formą płatności stosowaną przez naszą firmę jest przelew bankowy.  Posiadamy konto w Banku X nr konta 00 0000 0000 0000 0000 0000. Terminy płatności to 1 dzień.W przypadku nie wykonania płatności naliczona będzie kara w wysokości 50% ceny wypożyczenia danego filmu";

            // użycie funkcji mail
            mail($adres, $tytul, $wiadomosc);
            if (mail($adres, $tytul, $wiadomosc))
      echo '<br><br>Ta wiadomość została wysłana na Twój e-mail:      '. $adres ; 
      
      echo'  <a href="zamowienia.php" class="btn btn-inverse" role="button">Moje zamowienia </a>';
  }
?>

</body>
</html>