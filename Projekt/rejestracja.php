<?php
		session_start();
		if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
		{
			header('Location: panel.php');
			exit();
		}
		
		if(isset($_POST['email']))
		{
			//Udała się walidacja
			$udana=true; 
			//Poprawnosc imie 
			$imie = $_POST['imie'];
			//Poprawnosc nazwisko
			$nazwisko = $_POST['nazwisko'];
			//Poprawnosc login
			$login = $_POST['login'];
			//Poprawnosc e-mail 
			$email = $_POST['email'];
			$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
			
			if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
				{
					$udana=false;
					$_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
				}
			
			//Sprawdzenie dlugosci imienia
			if((strlen($imie)<2) ||(strlen($imie)>30))
			{
				$udana=false;
				$_SESSION['e_imie'] = "Imię musi zawierać co najmniej dwa znaki!";
			}
			//Sprawdzenie dlugosci nazwiska
			if((strlen($nazwisko)<2) ||(strlen($nazwisko)>30))
			{
				$udana=false;
				$_SESSION['e_nazwisko'] = "Nazwisko musi zawierać co najmniej dwa znaki!";
			}
			//Sprawdzenie dlugosci loginu
			if((strlen($login)<3) ||(strlen($login)>30))
			{
				$udana=false;
				$_SESSION['e_login'] = "Login musi zawierać co najmniej trzy znaki!";
			}
			
			//Poprawnosc hasla
			$haslo1= $_POST['haslo1'];
			$haslo2= $_POST['haslo2'];
			if((strlen($haslo1)<8) ||(strlen($haslo1)>30))
			{
				$udana=false;
				$_SESSION['e_haslo'] = "Hasło musi zawierać co najmniej osiem znaków!";
			}
			if($haslo1!=$haslo2)
			{
				$udana=false;
				$_SESSION['e_haslo'] = "Hasła różnią się od siebie!";
			}
			
				$haslo_hash=password_hash($haslo1, PASSWORD_DEFAULT); 

		
		require_once "polaczenie.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy jest taki mail?
				$rezultat = $polaczenie->query("SELECT id_klienta FROM klienci WHERE mail='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$udana=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}	
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id_klienta FROM klienci WHERE mail='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$udana=false;
					$_SESSION['e_email']="Podany adres e-mail istnieje już w naszej bazie!";
				}	
				
				//Czy login już istnieje?
				$rezultat = $polaczenie->query("SELECT id_klienta FROM klienci WHERE login='$login'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_loginow = $rezultat->num_rows;
				if($ile_takich_loginow>0)
				{
					$udana=false;
					$_SESSION['e_login']="Istnieje już osoba o takim samym loginie!";
				}		
				if($udana==true)
				{
					if ($polaczenie->query("INSERT INTO klienci VALUES (NULL, '$imie', '$nazwisko', '$login','$haslo_hash','$email', 1000)"))
					{
							$_SESSION['udanarejestracja']=true;
							header('Location: udalosie.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
						
				}

				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Rejestracja</title>
	
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
		<div id="rejestracja">
			<div id="zalozkonto">
			<form method="post">
				<img src="img/logo.png" class="logowanie_logo2">
				<h3 class="napis_pan2"> Załóż konto </h3>
				<div id="left">
					<h3 class="napisloga"> Podaj swoje imię:</h3>
					<input class="wartosci" type="text" name="imie"/> <br /> 
					<?php
						if(isset($_SESSION['e_imie']))
						{
							echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
							unset($_SESSION['e_imie']);
							
						}
					?>
					<h3 class="napisloga"> Podaj swoje nazwisko:</h3>
					<input class="wartosci" type="text" name="nazwisko"/> <br /> 
						<?php
						if(isset($_SESSION['e_nazwisko']))
						{
							echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
							unset($_SESSION['e_nazwisko']);
							
						}
					?>
					<h3 class="napisloga"> Wprowadź login: </h3>
					<input class="wartosci" type="text" name="login"/> <br /> 
						<?php
						if(isset($_SESSION['e_login']))
						{
							echo '<div class="error">'.$_SESSION['e_login'].'</div>';
							unset($_SESSION['e_login']);
							
						}
					?>
				</div>
				<div id="right">
					<h3 class="napisloga"> Wprowadź adres e-mail: </h3>
					<input class="wartosci" type="text" name="email"/> <br /> 
					<?php
						if(isset($_SESSION['e_email']))
						{
							echo '<div class="error">'.$_SESSION['e_email'].'</div>';
							unset($_SESSION['e_email']);
							
						}
					?>
					<h3 class="napisloga"> Podaj hasło: </h3>
					<input class="wartosci" type="password" name="haslo1"/> <br /> 
					<?php
						if(isset($_SESSION['e_haslo']))
						{
							echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
							unset($_SESSION['e_haslo']);
							
						}
					?>
					<h3 class="napisloga"> Powtórz hasło: </h3>
					<input class="wartosci" type="password" name="haslo2"/> <br /> 
				</div>
				<div id="bumm">
				<input class="przycisk_logowania" type="submit" value="Utwórz konto"/>
				</div>
			</form>
			</div>
		</div>
</body> 


</html>