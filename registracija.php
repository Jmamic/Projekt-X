
<?php


$imeKorisnika = $_POST['imeKorisnika'];
$lozinkaKorisnika = md5(htmlspecialchars($_POST['lozinkaKorisnika']));


$dbc = mysqli_connect('localhost', 'root', '', 'projectx_baza') or die('Neuspješno spajanje na bazu.');
$sql = "INSERT INTO users (username, password)
		VALUES (?, ?)";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
	mysqli_stmt_bind_param($stmt, 'ss', $imeKorisnika, $lozinkaKorisnika);
    mysqli_stmt_execute($stmt);
	$registriranKorisnik = true;
}
mysqli_close($dbc);
?>


