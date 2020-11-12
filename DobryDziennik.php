<?php
//podłączenie się do bazy danych
$nazwa_serwera = "localhost";
$uzytkownik = "root";
$haslo = "";
$con = mysqli_connect($nazwa_serwera, $uzytkownik, $haslo);
//pobranie danych z bazy
$sql = "SELECT kod_karty FROM Specjalizacja.uczeń";
$result = mysqli_query($con, $sql);
echo "kod: ". $row["kod_karty"]. "<br>";


$con->close();
?>
