<?php
		session_start();
		if ((isset($_SESSION['udanarejestracja'])))
		{
			header('Location: index.php');
			exit();
		}
		else
		{
			unset($_SESSION['udanarejestracja']);
		}
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	
	<title>Kantor wymiany walut</title>
	
	<link rel="stylesheet" href="styl.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@0;1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
</head>
<body>
	<div id="header">
		<div id="naglowek">
			<div id="logo"> <img src="img/logo.png" class="logo2"></div>
			<div id="napis"> <a href="index.php" class="link">Kantor wymiany walut</a></div>
		</div>
		<div id="nawigacja">
			<div class="przycisk"> <a href="logowanie.php" class="link">Zaloguj się </a></div>
			<div class="przycisk"> <a href="rejestracja.php" class="link"> Zarejestruj się </a></div>
			<div class="przycisk"> Sprawdź kursy </div>
		</div>
	</div>
	<div id="panel_logowania">
			<div id="logowanie">
			<img src="img/logo.png" class="logowanie_logo">
			<h3 class="napis_pan"> Panel logowania </h3>
			<form action="zaloguj.php" method="post">
			<h3 class="napislog"> Wpisz swój login: </h3>
			<input class="wartosci" type="text" name="login"/> <br/>
			<h3 class="napislog"> Wpisz swoje hasło: </h3>
			<input class="wartosci" type="password" name="haslo"/> <br/>
			<input id="przycisk_logowania" type="submit" value="Zaloguj się"/>
		</form> 
		<?php
			if(isset($_SESSION['blad'])) echo $_SESSION['blad']
		?>
			</div>
		</div>
	
	
</body> 


</html>
