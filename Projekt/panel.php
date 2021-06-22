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
		echo "<div class='powitanie'>Cześć ".$_SESSION['imie']."!</div>";
		echo "<div class='saldo'><b>Twoje saldo obecnie wynosi: </b>".$saldo."PLN</div>";
		echo "<div class='mail'><b>Twój adres e-mail:</b> ".$_SESSION['mail']."</div>";
		echo '</div>';
		
?>
	<div id="zasil">
	   <h2 id="zasilk"> WPŁAĆ ŚRODKI </h2>
		 <form method="post"> 
	 	  
			<input class="zasilko" type="text" name="iloscsr"/> 
				
			<input type="submit" id="doplac" value="Wpłać">
	     </form>
		 <?php
		 @$ilosc = $_POST['iloscsr'];
		 $nowa = $saldo + $ilosc;
		 $id= $_SESSION['id'];
		 require_once "polaczenie.php";
		 $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		 if ($polaczenie->query("UPDATE klienci SET saldo = '$nowa' WHERE id_klienta = ".$id))
		{
				echo "<h3 id='wpl'>Wpłacono!</h3>";
				$polaczenie->close();
		}
		 
		 ?>
	</div>
	<div id="zasil2">
		<div id="dosrodka">
	   <h2 id="zasilk2134"> KUP WALUTĘ </h2>
			<h3 id="zadjsio"> Wybierz walutę: </h3>
			
			<form method="post">
			<div class="select">
				<select name="format" id="format">
				  <option value="eur"><?php echo $wiersz0['nazwa_waluty']; 
				  ?></option>
				  <option value="usd"><?php echo $wiersz1['nazwa_waluty']; 
				  ?></option>
				  <option value="chf"><?php echo $wiersz2['nazwa_waluty']; 
				  ?></option>
				  <option value="gbp"><?php echo $wiersz3['nazwa_waluty']; 
				  ?></option>
				  <option value="aud"><?php echo $wiersz4['nazwa_waluty']; 
				  ?></option>
				  <option value="cny"><?php echo $wiersz5['nazwa_waluty']; 
				  ?></option>
				  <option value="czk"><?php echo $wiersz6['nazwa_waluty']; 
				  ?></option>
				  <option value="hrk"><?php echo $wiersz7['nazwa_waluty']; 
				  ?></option>
				  <option value="rub"><?php echo $wiersz8['nazwa_waluty']; 
				  ?></option>
				  <option value="thb"><?php echo $wiersz9['nazwa_waluty']; 
				  ?></option>
				  <option value="jpy"><?php echo $wiersz10['nazwa_waluty'];
				  ?></option>
				</select>
		
			</div>
			<div class="drugie ">
					
					<h3 id="zadjsio34"> Wprowadź ilość (PLN):</h3>
					<input class="wartosci" type="text" name="ilosc"/>  					
					
			</div>
			<div>
				<input type="submit"/ id="sprawdz" value="Kup!">
			</div>
			</form> 
			<?php
			
			@$ilosc = $_POST['ilosc'];
			$wynik;
			$zaplacono;	
			if(!isset($_POST['format']))
			{
				exit();
			}
			if($_POST['format'] == "usd")
							{
								$wynik=$ilosc/$wiersz1['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz1['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś USD: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',2,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "eur")
							{
								$wynik=$ilosc/$wiersz0['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz0['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś EUR: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',1,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "chf")
							{
								$wynik=$ilosc/$wiersz2['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz2['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś CHF: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',3,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "gbp")
							{
								$wynik=$ilosc/$wiersz3['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz3['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś GBP: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',4,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}	
				if($_POST['format'] == "aud")
							{
								$wynik=$ilosc/$wiersz4['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz4['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś AUD: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',5,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "cny")
							{
								$wynik=$ilosc/$wiersz5['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz5['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś CNY: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',6,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "czk")
							{
								$wynik=$ilosc/$wiersz6['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz6['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś CZK: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',7,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}
				if($_POST['format'] == "HRK")
							{
								$wynik=$ilosc/$wiersz7['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz7['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś HRK: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',8,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}	
				if($_POST['format'] == "rub")
							{
								$wynik=$ilosc/$wiersz8['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz8['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś RUB: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',9,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}	
				if($_POST['format'] == "thb")
							{
								$wynik=$ilosc/$wiersz9['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz9['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś THB: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',10,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}	
				if($_POST['format'] == "jpy")
							{
								$wynik=$ilosc/$wiersz10['kurs_sp'];
								$zaplacono;
								$zaplacono=$wynik*$wiersz10['kurs_sp'];
								$nowe_saldo= $saldo - $zaplacono;
								if($nowe_saldo<0)
								{
									echo "<div class='komunikat_e'>Nie masz wystarczających środków. <br> 
										Doładuj konto! </div>";
								}
								else
								{
									echo "<div class='komunikat'>Kupiłeś JPY: ";
									echo round($wynik, 2).". <br>Zakup pokryto ze środków dostępnych na koncie.
									<br> Odśwież stronę.</div>";
									     require_once "polaczenie.php";
										 if($polaczenie = @new mysqli($host, $db_user, $db_password, $db_name))
										 {
											 $polaczenie->query("INSERT INTO transakcje(id_klienta, id_waluty, data) VALUES 
											 ('$id',11,CURDATE())");
											 $polaczenie->query("UPDATE klienci SET saldo = '$nowe_saldo' WHERE id_klienta = ".$id);
											 $polaczenie->close();
											 
										 }
								}
							}			
				?>	
			</div>
	</div>
	
	</div>
     
	
</body> 


</html>
