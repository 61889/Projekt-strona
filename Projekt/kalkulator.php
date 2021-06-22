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
				$wiersz = $rez->fetch_assoc();
				$wiersz['nazwa_waluty'];
				$wiersz['kurs_kup'];
				$wiersz['kurs_sp'];
			}
			if ($rez = @$polaczenie->query($sql1))
			{
				$wiersz1 = $rez->fetch_assoc();
				$wiersz1['nazwa_waluty'];
				$wiersz1['kurs_kup'];
				$wiersz1['kurs_sp'];
			}
			if ($rez = @$polaczenie->query($sql2))
			{
				$wiersz2 = $rez->fetch_assoc();
				$wiersz2['nazwa_waluty'];
				$wiersz2['kurs_kup'];
				$wiersz2['kurs_sp'];
				
			}
			if ($rez = @$polaczenie->query($sql3))
			{
				$wiersz3 = $rez->fetch_assoc();
				$wiersz3['nazwa_waluty'];
				$wiersz3['kurs_kup'];
				$wiersz3['kurs_sp'];
				
			}if ($rez = @$polaczenie->query($sql4))
			{
				$wiersz4 = $rez->fetch_assoc();
				$wiersz4['nazwa_waluty'];
				$wiersz4['kurs_kup'];
				$wiersz4['kurs_sp'];
				
			}if ($rez = @$polaczenie->query($sql5))
			{
				$wiersz5 = $rez->fetch_assoc();
				$wiersz5['nazwa_waluty'];
				$wiersz5['kurs_kup'];
				$wiersz5['kurs_sp'];
				;
			}if ($rez = @$polaczenie->query($sql6))
			{
				$wiersz6 = $rez->fetch_assoc();
				$wiersz6['nazwa_waluty'];
				$wiersz6['kurs_kup'];
				$wiersz6['kurs_sp'];
				
			}if ($rez = @$polaczenie->query($sql7))
			{
				$wiersz7 = $rez->fetch_assoc();
				$wiersz7['nazwa_waluty'];
				$wiersz7['kurs_kup'];
				$wiersz7['kurs_sp'];
				
			}if ($rez = @$polaczenie->query($sql8))
			{
				$wiersz8 = $rez->fetch_assoc();
				$wiersz8['nazwa_waluty'];
				$wiersz8['kurs_kup'];
				$wiersz8['kurs_sp'];
			
			}if ($rez = @$polaczenie->query($sql9))
			{
				$wiersz9 = $rez->fetch_assoc();
				$wiersz9['nazwa_waluty'];
				$wiersz9['kurs_kup'];
				$wiersz9['kurs_sp'];
				
			}if ($rez = @$polaczenie->query($sql10))
			{
				$wiersz10 = $rez->fetch_assoc();
				$wiersz10['nazwa_waluty'];
				$wiersz10['kurs_kup'];
				$wiersz10['kurs_sp'];
				
			}
	}
	
	?>
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
	<div id="spody">
		<div id="lewa">
			<h1 class="napis"> Kalkulator z walutą</h1> 
			<h2 class="napis2"> Wpisz kwotę i sprawdź ile <br> możesz kupić obcej waluty!</h2>
			<div class="przycisk2"> Utwórz konto! </div>
		</div>
		<div id="prawa">
			<h3> Wybierz walutę: </h3>
			<form action="kalkulator.php" method="post">
			<div class="select">
				<select name="format" id="format">
				  <option value="usd">USD (Dolar amerykański)</option>
				  <option value="eur">EUR (Euro)</option>
				  <option value="gbp">GBP (Funt brytyjski)</option>
				  <option value="chf">CHF (Frank szwajcarski)</option>
				  <option value="aud">AUD (Dolar australijski)</option>
				</select>
			</div>
			<div class="drugie ">
					
						<h3> Wprowadź ilość (PLN): </h3>

					<input class="wartosci" type="text" name="ilosc"/>  					
					
			</div>
			<div>
				<input type="submit" id="sprawdz" value="Sprawdź!">
			</div>
			</form>  
			<h3>
			<?php
			
			if(isset($_POST['ilosc']))
			{
				$ilosc = $_POST['ilosc'];
				$udana=true; 
				if((strlen($ilosc)<0))
				{
					$udana=false;
				}
				if($udana==true)
				{
					{
						$wartosc = $_POST['ilosc'];
						$wynik;
						if($_POST['format'] == "usd")
							{
								$wynik=$wartosc/$wiersz1['kurs_sp'];
								echo "Otrzymasz USD: <br>";
								echo round($wynik, 2);
							}
						if($_POST['format'] == "eur")
							{
								$wynik=$wartosc/$wiersz['kurs_sp'];
								echo "Otrzymasz EUR: <br>";
								echo round($wynik, 2);
							}
						if($_POST['format'] == "gbp")
							{
								$wynik=$wartosc/$wiersz3['kurs_sp'];
								echo "Otrzymasz GBP: <br>";
								echo round($wynik, 2);
							}
						if($_POST['format'] == "chf")
							{
								$wynik=$wartosc/$wiersz2['kurs_sp'];
								echo "Otrzymasz CHF: <br>";
								echo round($wynik, 2);
							}
						if($_POST['format'] == "aud")
							{
								$wynik=$wartosc/$wiersz4['kurs_sp'];
								echo "Otrzymasz AUD: <br>";
								echo round($wynik, 2);
							}
					}
				}
				else
				{
					echo 'Podaj ilosc';
				}
			}
				?>
			</h3>
		</div>
	</div>
	<div id="kursy">	
	<h4> Sprawdź obecne kursy </h4>
	<table>
		<tr>
			<td class="nag1">Waluta</td><td class="nag2" >Nazwa</td><td class="nag3">Kupno</td><td class="nag4">Sprzedaż</td>
		
              <tr>
            <td class="poz1"><img src="img/unia.png" class="obrazek"><b>EUR</b>/PLN</td> <td class="poz2" > <?php echo $wiersz['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/usa.png" class="obrazek"><b>USD</b>/PLN</td> <td class="poz2" > <?php echo $wiersz1['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz1['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz1['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/szwajcaria.png" class="obrazek"><b>CHF</b>/PLN</td> <td class="poz2" > <?php echo $wiersz2['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz2['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz2['kurs_sp']; ?></td> 
        </tr>
		 <tr>
           <td class="poz1"><img src="img/wielkabrytania.png" class="obrazek"><b>GBP</b>/PLN</td> <td class="poz2" > <?php echo $wiersz3['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz3['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz3['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/australia.png" class="obrazek"><b>AUD</b>/PLN</td> <td class="poz2" > <?php echo $wiersz4['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz4['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz4['kurs_sp']; ?></td>  
        </tr>
		 <tr>
            <td class="poz1"><img src="img/chiny.png" class="obrazek"><b>CNY</b>/PLN</td> <td class="poz2" > <?php echo $wiersz5['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz5['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz5['kurs_sp']; ?></td> 
        </tr>
		 <tr>
			<td class="poz1"><img src="img/czechy.png" class="obrazek"><b>CZK</b>/PLN</td> <td class="poz2" > <?php echo $wiersz6['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz6['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz6['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/chrwacja.png" class="obrazek"><b>HRK</b>/PLN</td> <td class="poz2" > <?php echo $wiersz7['nazwa_waluty']; ?> </td> 
		    <td class="poz3"><?php echo $wiersz7['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz7['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/rosja.png" class="obrazek"><b>RUB</b>/PLN</td> <td class="poz2" > <?php echo $wiersz8['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz8['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz8['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/tajlandia.png" class="obrazek"><b>THB</b>/PLN</td> <td class="poz2" > <?php echo $wiersz9['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz9['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz9['kurs_sp']; ?></td> 
        </tr>
		 <tr>
            <td class="poz1"><img src="img/japonia.png" class="obrazek"><b>JPY</b>/PLN</td> <td class="poz2" > <?php echo $wiersz10['nazwa_waluty']; ?> </td> 
			<td class="poz3"><?php echo $wiersz10['kurs_kup']; ?></td> <td class="poz4"><?php echo $wiersz10['kurs_sp']; ?></td> 
        </tr>
        </tr>
		
	</table>
			
	
	
	</div>
	
</body> 


</html>
