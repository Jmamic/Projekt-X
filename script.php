<?php

// Spremanje podataka poslanih putem forme u varijable
$pitanje = $_POST['pitanje'];
$odg1 = $_POST['odg1'];
$odg2 = $_POST['odg2'];
$odg3 = $_POST['odg3'];
$odg4 = $_POST['odg4'];
$odg5 = $_POST['odg5'];
$vrijeme = $_POST['vrijeme'];



// Spajanje i spremanje u bazu unosa
$dbc = mysqli_connect('localhost', 'root', '', 'projectx_baza')
	   or die('Neuspješno spajanje na bazu.');
$query = "INSERT INTO pitanja (pitanje,
								 odg1,
								 odg2,
								 odg3,
								 odg4,
								 odg5,
								 vrijeme)
          VALUES ('$pitanje',
			  	  '$odg1',
				  '$odg2',
				  '$odg3',
				  '$odg4',
				  '$odg5',
				  '$vrijeme')";
$result = mysqli_query($dbc, $query)
		  or die('Nije uspjelo spremanje u bazu.');
mysqli_close($dbc);

?>