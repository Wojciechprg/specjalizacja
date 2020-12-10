<?php
$db = mysqli_connect ("localhost", "root", ""); // Polaczenie z baza danych
mysqli_select_db ($db, "Obecnosc"); // Polaczenie z tabela

$dzientygodnia = date("w"); // Pobranie dnia tygodnia
$godziny = date("H"); // Pobranie godziny
$minuty = date("i"); // Pobranie minuty


switch($dzientygodnia) {
	
	case 1: //Poniedzialek
	$obecnosc = mysqli_query ($db, "SELECT Wartosc FROM Obecnosc WHERE Lekcja='Poniedzialek1'");
	if ($godziny = 8 and $minuty <= 15) { // Jest to pierwsza lekcja, wiec 8:00-8:45, powyzej 15 minut jest spoznienie
		mysqli_query ($db, "UPDATE Obecnosc SET Wartosc=1 WHERE Lekcja='Poniedzialek1'"); // Zmiana wartosci w wierszu na obecnosc
		$obecnosc = mysqli_query ("SELECT Wartosc FROM Obecnosc WHERE Lekcja='Poniedzialek1'"); // Pobranie wartosci z bazy
		$poniedzialek1 = "green"; // Zmiana koloru kratki na Obecnosc
	}
	else if ($godziny = 8 and $minuty > 15 and $minuty < 45){ // Spoznienie obowiazuje do ostatniej minuty lekcji
		mysqli_query ($db, "UPDATE Obecnosc SET Wartosc=1 WHERE Lekcja='Poniedzialek1'"); // Zmiana wartosci w wierszu na obecnosc
		$obecnosc = mysqli_query ($db, "SELECT Wartosc FROM Obecnosc WHERE Lekcja='Poniedzialek1'"); // Pobranie wartosci z bazy
		$poniedzialek1 = "orange"; // Zmiana koloru kratki na spoznienie
	}
	else if ($godziny >= 8 and $minuty > 45 and $obecnosc = 0){ // Nie pojawienie sie na lekcji w danych godzinach to nieobecnosc
		mysqli_query ($db, "UPDATE Obecnosc SET Wartosc=1 WHERE Lekcja='Poniedzialek1'"); // Zmiana wartosci w wierszu na obecnosc
		$obecnosc = mysqli_query ($db, "SELECT Wartosc FROM Obecnosc WHERE Lekcja='Poniedzialek1'"); // Pobranie wartosci z bazy
		$poniedzialek1 = "red"; // Zmiana koloru kratki na nieobecnosc
	}		
			
	break;
	
	// case 2: // Wtorek
	
	// case 3: // Sroda
	
	// case 4: // Czwartek
	
	// case 5: // Piatek
	
	// Musisz zrobic dla kazdej lekcji w kazdym dniu tygodnia to, co zrobilem wyzej
	// Bo ja zrobilem tylko dla pierwszej lekcji w poniedzialek
	// Wystarczy tylko to kopiowac ciagle, ale odpowiednio modyfikujac o inny dzien i godzine
	// Jesli to zrobisz, to to juz bedzie koniec, wstaw na githuba i ja to poskladam w calosc, jesli cos nie bedzie gralo
}


mysqli_close ($db); // Zakonczenie polaczenia z baza danych
?>

<html>
<meta charset="UTF-8" />
<head>
<link rel="stylesheet" href="DobryDziennik.css">
</head>
<header>
<center><a href="PrzylozKarte.html">DobryDziennik</a></center>
</header>
<body>

<div class="dzien">Poniedziałek

<div class="lekcja">Historia: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedzialek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedzialek2 ?>">.</div>

<div class="lekcja">Polski: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedzialek3 ?>">.</div>

<div class="lekcja">Matematyka: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedzialek4 ?>">.</div>

<div class="lekcja">Matematyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedzialek5 ?>">.</div>

</div><br>

<div class="dzien">Wtorek

<div class="lekcja">Informatyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $wtorek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $wtorek2 ?>">.</div>

<div class="lekcja">Chemia: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $wtorek3 ?>">.</div>

<div class="lekcja">Matematyka: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $wtorek4 ?>">.</div>

<div class="lekcja">Fizyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $wtorek5 ?>">.</div>

</div><br>

<div class="dzien">Środa

<div class="lekcja">W-F: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $sroda1 ?>">.</div>

<div class="lekcja">W-F: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $sroda2 ?>">.</div>

<div class="lekcja">W-F: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $sroda3 ?>">.</div>

<div class="lekcja">Religia: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $sroda4 ?>">.</div>

<div class="lekcja">Religia: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $sroda5 ?>">.</div>

</div><br>

<div class="dzien">Czwartek

<div class="lekcja">Matematyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $czwartek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $czwartek2 ?>">.</div>

<div class="lekcja">Polski: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $czwartek3 ?>">.</div>

<div class="lekcja">Biologia: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $czwartek4 ?>">.</div>

<div class="lekcja">Biologia: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $czwartek5 ?>">.</div>

</div><br>

<div class="dzien">Piątek

<div class="lekcja">Matematyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $piatek1 ?>">.</div>

<div class="lekcja">Angielski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $piatek2 ?>">.</div>

<div class="lekcja">Niemiecki: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $piatek3 ?>">.</div>

<div class="lekcja">Polski: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $piatek4 ?>">.</div>

<div class="lekcja">Informatyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $piatek5 ?>">.</div>

</div><br>
</body>
</html>
