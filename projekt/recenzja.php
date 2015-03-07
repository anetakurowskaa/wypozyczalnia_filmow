<?php session_start();
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
 	<p>
	Dodawanie recenzji
	</p>



		<form action="dodaj_rec.php" method="post">
			Podaj e-mail: </br><input type="text" name="tel" /></br></br>
			Twoja recenzja: </br><textarea name="content" cols="100" rows="10"></textarea></br></br>
			<input type="submit" value="Dodaj recenzję" class="btn btn-inverse"/>
		</form>	



	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>