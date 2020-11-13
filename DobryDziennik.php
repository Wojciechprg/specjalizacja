<?php
//podłączenie się do bazy danych
$nazwa_serwera = "localhost";
$uzytkownik = "root";
$haslo = "";
$con = mysqli_connect($nazwa_serwera, $uzytkownik, $haslo);
//podłączenie html
require_once 'DobryDziennik.html';
//pobranie danych z bazy
$sql = "SELECT kod_karty FROM Specjalizacja.uczeń";
//sprawdzenie poprawności kodu z karty z kodem ucznia w bazie danych
if ($_POST["kod"] == $row["kod_karty"]) {
  echo = "kody ucznia się zgadzają";
}


$con->close();
?>
