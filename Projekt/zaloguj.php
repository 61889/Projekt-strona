<?php

	session_start();
	if((!isset($_POST['login']))||(!isset($_POST['haslo'])))
	{
		header('Location: index.html');
		exit();
	}
	
	require_once "polaczenie.php";
	
	
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
		{
			echo "Blad ".$polaczenie->connect_errno;
		}
	else
	{
		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		
		
		
		$sql = "SELECT * FROM klienci WHERE login='$login'";
		if ($rez = @$polaczenie->query($sql))
			{
				$ile_osob = $rez->num_rows;
				if($ile_osob>0)
				{
					$wiersz = $rez->fetch_assoc();
					
					if(password_verify($haslo, $wiersz['haslo']))
					{
						$_SESSION['zalogowany'] = true;
						$_SESSION['id'] = $wiersz['id_klienta'];
						$_SESSION['imie']= $wiersz['imie'];
						$_SESSION['saldo']= $wiersz['saldo'];
						$_SESSION['mail']= $wiersz['mail'];
						unset($_SESSION['blad']);
						$rez->close();
						if($_SESSION['id']==9)
						{
						header('Location: paneladmin.php');
						}
						else
						{
							header('Location: panel.php');
						}
					}
					else
					{
						$_SESSION['blad'] = '<div class="blad"> <b> Wpisałeś zły login lub hasło! </b> <div>' ;
						header('Location: logowanie.php');
					}
					
				}
				else
				{
					$_SESSION['blad'] = '<div class="blad"> <b> Wpisałeś zły login lub hasło! </b> <div>' ;
					header('Location: logowanie.php');
					
				}
			}
		
		$polaczenie->close();
	}
?>
