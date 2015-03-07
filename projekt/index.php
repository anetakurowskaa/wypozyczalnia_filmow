<?php session_start();
     require_once('db.php');
       
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

<div class="container">
	<div class="page-header">
		<h1>Wypożyczalnia filmów</h1>

 <?php
    /* jeżeli nie wypełniono formularza - to znaczy nie ma zmiennej login, hasło i sesja auth
     * to wyświetl formularz, aby się zalogować
     */
    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
  ?>

		
		<form class="form-inline" name="form-logowanie" action="index.php" method="post"> 
			<input type="text" class="input-small" name="login" placeholder="e-mail">
			<input type="password" class="input-small" name="password" placeholder="haslo">
			<label class="checkbox">
				<input type="checkbox">Zapamiętaj mnie
			</label>
			<button type="submit" name="zaloguj" class="btn btn-inverse">Zaloguj</button>
		</form>
		<a href="rejestracja2.php">Zarejestruj się</a>
		
<?php
  }
    /* jeżeli wpisano dane w login oraz password i sesja z autoryzacją użytkownika wynosi FALSE to wykona się
     * skrypt logowania
     */
	elseif (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
      
        // pola login i password nie sa puste  
		if (!empty($_POST['login']) && !empty($_POST['password'])) {
          
		// dodaje znaki unikowe dla potrzeb poleceń SQL
		$login = mysql_real_escape_string($_POST['login']);
		$password = mysql_real_escape_string($_POST['password']);
        
        
        // szyfrowanie hasla
        $password = sha1($password);
		
        /* zapytanie do bazy danych
         * mysql_num_rows - ilosc wierszy dla zapytania
         * mysql_query - pobranie wszystkich (*) danych z tabeli uzytkownicy1 gdzie email i haslo odpowiadają wpisanym danym
         */
         
		$sql = mysql_num_rows(mysql_query("SELECT * FROM `uzytkownicy1` WHERE `email` = '$login' AND `haslo` = '$password'"));
    
        
        // jeżeli $sql=1, to znaczy dane poprawne i następuje rejestracja sesji
			if ($sql == 1) {
              
                // zmienne sesysje: user->jej wartość to wpisany e-mail  oraz sesja autoryzacyjna ustawiona na TRUE
				$_SESSION['user'] = $login;
				$_SESSION['auth'] = TRUE;
                            
                
                // przekierwuję użytkownika na stronę dla zalogowanych uzytkowników
                //tutaj zmiana!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                echo '<meta http-equiv="refresh" content="1; URL=index.php">';
				echo '<p style="padding-top:10px";><strong>Proszę czekać...</strong><br />trwa logowanie i wczytywanie danych</p>';
               
			}
            
            // jeżeli zapytanie różne od 1, to błąd logowania - komunikat
            
			else {
				echo '<p style="padding-top:10px;color:red";>Wystąpił błąd podczas logowania.<br />';
				echo '<a href="index.php">Spróbuj ponownie.</a></p>';
			}
		}
        
        // jeżeli pole login lub hasło jest puste to błąd logowania - komunikat
        
		else {
			echo '<p style="padding-top:10px;color:red";>Wystąpił błąd podczas logowania.<br />';
			echo '<a href="index.php">Spróbuj ponownie.</a></p>';
		}
	}
    
    // jeżeli sesja auth jest TRUE to przekieruj użytkownika na stronę dla zalogowanych uzytkowników
    
	if ($_SESSION['auth'] == TRUE) {
                echo '<a href="index.php?logout">';
                echo 'Wyloguj się (';
                echo $_SESSION['user'] ;
                echo ')</a>';
                  }
  else {
          echo '<meta URL=index.php">';
        
  }
    
  // wyloguj się
    if  ($_SESSION['auth'] == TRUE && isset($_GET['logout'])) {
		$_SESSION['user'] = '';
		$_SESSION['auth'] = FALSE;
        echo '<meta http-equiv="refresh" content="1; URL=index.php">';
		echo '<p style="padding-top:10px"><strong>Proszę czekać...</strong><br />trwa wylogowywanie</p>';
	}
    
    if  ($_SESSION['auth'] == FALSE ) {
		$_SESSION['user'] = '';
		echo '<URL=index.php">';
		
	}
  /// id_usera zalogowanego uzytkownika 
$login2=$_SESSION['user'];
$sql2 = mysql_query("SELECT `id_uzytkownika` FROM `uzytkownicy1` WHERE `email` = '$login2'");  
$row = mysql_fetch_array($sql2);
$idu=$row['id_uzytkownika'];


echo ('</div>');
echo ('</div>');
echo ('</div>');
?>		
		
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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>




</body>
</html>

