<?php
		session_start();
		
		if(!isset($_SESSION['zalogowany']))
		{
			header('Location: index.php');
			exit();
		}
?>
<?php  
	  require_once "polaczenie.php";
	
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
		{
			echo "Blad polaczenia z baza!".$polaczenie->connect_errno;
		}
	else
	{
			$sql0 = "SELECT * FROM waluty where id_waluty=1";
			$sql1 = "SELECT * FROM waluty where id_waluty=2";
			$sql2 = "SELECT * FROM waluty where id_waluty=3";
			$sql3 = "SELECT * FROM waluty where id_waluty=4";
			$sql4 = "SELECT * FROM waluty where id_waluty=5";
			$sql5 = "SELECT * FROM waluty where id_waluty=6";
			$sql6 = "SELECT * FROM waluty where id_waluty=7";
			$sql7 = "SELECT * FROM waluty where id_waluty=8";
			$sql8 = "SELECT * FROM waluty where id_waluty=9";
			$sql9 = "SELECT * FROM waluty where id_waluty=10";
			$sql10 = "SELECT * FROM waluty where id_waluty=11";
			if ($rez = @$polaczenie->query($sql0))
			{
				$wiersz0 = $rez->fetch_assoc();
				$wiersz0['nazwa_waluty'];
				$wiersz0['kurs_kup'];
				$wiersz0['kurs_sp'];
				$wiersz0['id_waluty'];
			}
			if ($rez = @$polaczenie->query($sql1))
			{
				$wiersz1 = $rez->fetch_assoc();
				$wiersz1['nazwa_waluty'];
				$wiersz1['kurs_kup'];
				$wiersz1['kurs_sp'];
				$wiersz1['id_waluty'];
			}
			if ($rez = @$polaczenie->query($sql2))
			{
				$wiersz2 = $rez->fetch_assoc();
				$wiersz2['nazwa_waluty'];
				$wiersz2['kurs_kup'];
				$wiersz2['kurs_sp'];
				$wiersz2['id_waluty'];
			
			}
			if ($rez = @$polaczenie->query($sql3))
			{
				$wiersz3 = $rez->fetch_assoc();
				$wiersz3['nazwa_waluty'];
				$wiersz3['kurs_kup'];
				$wiersz3['kurs_sp'];
				$wiersz3['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql4))
			{
				$wiersz4 = $rez->fetch_assoc();
				$wiersz4['nazwa_waluty'];
				$wiersz4['kurs_kup'];
				$wiersz4['kurs_sp'];
				$wiersz4['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql5))
			{
				$wiersz5 = $rez->fetch_assoc();
				$wiersz5['nazwa_waluty'];
				$wiersz5['kurs_kup'];
				$wiersz5['kurs_sp'];
				$wiersz5['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql6))
			{
				$wiersz6 = $rez->fetch_assoc();
				$wiersz6['nazwa_waluty'];
				$wiersz6['kurs_kup'];
				$wiersz6['kurs_sp'];
				$wiersz6['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql7))
			{
				$wiersz7 = $rez->fetch_assoc();
				$wiersz7['nazwa_waluty'];
				$wiersz7['kurs_kup'];
				$wiersz7['kurs_sp'];
				$wiersz7['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql8))
			{
				$wiersz8 = $rez->fetch_assoc();
				$wiersz8['nazwa_waluty'];
				$wiersz8['kurs_kup'];
				$wiersz8['kurs_sp'];
				$wiersz8['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql9))
			{
				$wiersz9 = $rez->fetch_assoc();
				$wiersz9['nazwa_waluty'];
				$wiersz9['kurs_kup'];
				$wiersz9['kurs_sp'];
				$wiersz9['id_waluty'];
				
			}if ($rez = @$polaczenie->query($sql10))
			{
				$wiersz10 = $rez->fetch_assoc();
				$wiersz10['nazwa_waluty'];
				$wiersz10['kurs_kup'];
				$wiersz10['kurs_sp'];
				$wiersz10['id_waluty'];
			}
	}
	$polaczenie->close();
	?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	
	<title>Panel Klienta</title>
	
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
	<div class="przycisk5"> <a href="wylogowanie.php" class="link"> Wyloguj się </a></div>
	<div id="panel">
<?php
		require_once "polaczenie.php";
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		$saldo = "SELECT * FROM klienci where id_klienta = ".$_SESSION['id'];
		if ($rez = @$polaczenie->query($saldo))
			{
				$wiersz = $rez->fetch_assoc();
				$saldo=$wiersz['saldo'];
				$polaczenie->close();
			}
		
		echo '<div id="paneluz">';
		echo "<div class='powitanie'>Administrator: ".$_SESSION['imie']."!</div>";
		echo "<div class='saldo'><b>Twoje saldo obecnie wynosi: </b>".$saldo."PLN</div>";
		echo "<div class='mail'><b>Twój adres e-mail:</b> ".$_SESSION['mail']."</div>";
		echo '</div>';
		
?>

	<div id="zasil2">
		<div id="waluty_z">
			<h2 id="zasilk213"> ZMIEŃ KURSY </h2>
			<h2 id="zasilk2133"> (Musisz podać kursy dla wszystkich walut.) </h2>
			<div id="waluta_1"> 
			<img src="img/unia.png" class="obrazek_e">
			
			<?php echo"<h3 class='nazwysda'>".$wiersz0['nazwa_waluty']."</h3>"; ?>
			<?php echo"<h3 class='nazwysda2'> Obecny kurs sprzedaży: ".$wiersz0['kurs_sp']."</h3>"; ?>
			<form method="post"> 
			<input class="zasilko2" type="text" name="zmiana1"/> 
			<input type="submit" class="doplac2" value="Zmień kurs">
	        </form>
			<?php 
			 @$zmiana1= $_POST['zmiana1'];
				require_once "polaczenie.php";
				$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
				if ($polaczenie->query("UPDATE waluty SET kurs_sp = '$zmiana1' WHERE id_waluty = 1"))
					{
				echo "<h3 id='wpl'>Kurs został zmieniony. <br> Odśwież stronę.</h3>";
				$polaczenie->close();
						}
		 
		     ?>
			
			</div>
			
			<div id="waluta_2">
			<img src="img/usa.png" class="obrazek_e">
			<?php echo"<h3 class='nazwysda'>".$wiersz1['nazwa_waluty']."</h3>"; ?>
			<?php echo"<h3 class='nazwysda2'> Obecny kurs sprzedaży: ".$wiersz1['kurs_sp']."</h3>"; ?>
			<form method="post"> 
			<input class="zasilko2" type="text" name="zmiana2"/> 
			<input type="submit" class="doplac2" value="Zmień kurs">
	        </form>
			<?php 
			 @$zmiana2= $_POST['zmiana2'];
				require_once "polaczenie.php";
				$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
				if ($polaczenie->query("UPDATE waluty SET kurs_sp = '$zmiana2' WHERE id_waluty = 2"))
					{
				echo "<h3 id='wpl'>Kurs został zmieniony. <br> Odśwież stronę.</h3>";
				$polaczenie->close();
						}
		 
		     ?>
			</div>
			
			
			
			<div id="przerwa"></div>	
			
			<div id="waluta_4"> 
			<img src="img/wielkabrytania.png" class="obrazek_e">
			<?php echo"<h3 class='nazwysda'>".$wiersz3['nazwa_waluty']."</h3>"; ?>
			<?php echo"<h3 class='nazwysda2'> Obecny kurs sprzedaży: ".$wiersz3['kurs_sp']."</h3>"; ?>
			<form method="post"> 
			<input class="zasilko2" type="text" name="zmiana3"/> 
			<input type="submit" class="doplac2" value="Zmień kurs">
	        </form>
			<?php 
			 @$zmiana3= $_POST['zmiana3'];
				require_once "polaczenie.php";
				$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
				if ($polaczenie->query("UPDATE waluty SET kurs_sp = '$zmiana3' WHERE id_waluty = 4"))
					{
				echo "<h3 id='wpl'>Kurs został zmieniony. <br> Odśwież stronę.</h3>";
				$polaczenie->close();
						}
		 
		     ?>
			</div>
			<div id="waluta_5"> 
			<img src="img/szwajcaria.png" class="obrazek_e">
			<?php echo"<h3 class='nazwysda'>".$wiersz2['nazwa_waluty']."</h3>"; ?>
			<?php echo"<h3 class='nazwysda2'> Obecny kurs sprzedaży: ".$wiersz2['kurs_sp']."</h3>"; ?>
			<form method="post"> 
			<input class="zasilko2" type="text" name="zmiana4"/> 
			<input type="submit" class="doplac2" value="Zmień kurs">
	        </form>
			<?php 
			 @$zmiana4= $_POST['zmiana4'];
				require_once "polaczenie.php";
				$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
				if ($polaczenie->query("UPDATE waluty SET kurs_sp = '$zmiana4' WHERE id_waluty = 3"))
					{
				echo "<h3 id='wpl'>Kurs został zmieniony. <br> Odśwież stronę.</h3>";
				$polaczenie->close();
						}
		 
		     ?>
			</div>
			
			<div id="przerwa2"></div>	
			
		</div>	
	
	</div>
   </div>  
	
</body> 


</html>
