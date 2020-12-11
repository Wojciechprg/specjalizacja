<?php
$db = mysqli_connect ("localhost", "root", "", "specjalizacja"); // Polaczenie z baza danych
$dzientygodnia = date("w"); // Pobranie dnia tygodnia
$godziny = date("H"); // Pobranie godziny
$minuty = date("i"); // Pobranie minuty
echo $godziny. ":". $minuty;
$result = mysqli_query ($db, "SELECT kod_karty FROM uczeń");
$row = mysqli_fetch_assoc($result);
$kod_karty = $row["kod_karty"];
if ($_POST["kod"] == $kod_karty) {
 switch($dzientygodnia) {
	case 1: //Poniedzialek
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='poniedzialek1'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty <= 15) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='poniedzialek1'");
		$poniedzialek1 = "green";
	}else if ($godziny == 8 and $minuty > 15 and $minuty <= 45){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='poniedzialek1'");
		$poniedzialek1 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 8 and $minuty > 45 or $godziny > 8){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='poniedzialek1'");
		$poniedzialek1 = "red";
	}}elseif ($row["wartość"] == 1) {
		$poniedzialek1 = "green";
	}elseif ($row["wartość"] == 2) {
		$poniedzialek1 = "orange";
	}elseif ($row["wartość"] == 3) {
		$poniedzialek1 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='poniedzialek2'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty >= 50 or $godziny == 9 and $minuty <= 5) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='poniedzialek2'");
		$poniedzialek2 = "green";
	}else if ($godziny == 9 and $minuty > 5 and $minuty <= 35){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='poniedzialek2'");
		$poniedzialek2 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 9 and $minuty > 35 or $godziny > 9){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='poniedzialek2'");
		$poniedzialek2 = "red";
	}}elseif ($row["wartość"] == 1) {
		$poniedzialek2 = "green";
	}elseif ($row["wartość"] == 2) {
		$poniedzialek2 = "orange";
	}elseif ($row["wartość"] == 3) {
		$poniedzialek2 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='poniedzialek3'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 9 and $minuty >= 40 and $minuty <= 55) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='poniedzialek3'");
		$poniedzialek3 = "green";
	}else if ($godziny == 9 and $minuty > 55 or $godziny == 10 and $minuty <= 25){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='poniedzialek3'");
		$poniedzialek3 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 10 and $minuty > 25 or $godziny > 10){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='poniedzialek3'");
		$poniedzialek3 = "red";
	}}elseif ($row["wartość"] == 1) {
	$poniedzialek3 = "green";
	}elseif ($row["wartość"] == 2) {
	$poniedzialek3 = "orange";
	}elseif ($row["wartość"] == 3) {
	$poniedzialek3 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='poniedzialek4'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	 if ($godziny == 10 and $minuty >= 30 and $minuty <=45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='poniedzialek4'");
		$poniedzialek4 = "green";
	}else if ($godziny == 10 and $minuty > 45 or $godziny == 11 and $minuty <= 15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='poniedzialek4'");
		$poniedzialek4 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 11 and $minuty > 30 or $godziny > 11){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='poniedzialek4'");
		$poniedzialek4= "red";
	}}elseif ($row["wartość"] == 1) {
	$poniedzialek4 = "green";
	}elseif ($row["wartość"] == 2) {
	$poniedzialek4 = "orange";
	}elseif ($row["wartość"] == 3) {
	$poniedzialek4 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='poniedzialek5'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 11 and $minuty >= 30 and $minuty <= 45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='poniedzialek5'");
		$poniedzialek5 = "green";
	}else if ($godziny == 11 and $minuty > 45 or $godziny ==12 and $minuty <=15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='poniedzialek5'");
		$poniedzialek5 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 12 and $minuty > 15 or $godziny > 12){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='poniedzialek5'");
		$poniedzialek5= "red";
	}}elseif ($row["wartość"] == 1) {
		$poniedzialek5 = "green";
	}elseif ($row["wartość"] == 2) {
		$poniedzialek5 = "orange";
	}elseif ($row["wartość"] == 3) {
		$poniedzialek5 = "red";
	}break;
	case 2: // Wtorek
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='wtorek1'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty <= 15) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='wtorek1'");
		$wtorek1 = "green";
	}else if ($godziny == 8 and $minuty > 15 and $minuty <= 45){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='wtorek1'");
		$wtorek1 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 8 and $minuty > 45 or $godziny > 8){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='wtorek1'");
		$wtorek1 = "red";
	}}elseif ($row["wartość"] == 1) {
		$wtorek1 = "green";
	}elseif ($row["wartość"] == 2) {
		$wtorek1 = "orange";
	}elseif ($row["wartość"] == 3) {
		$wtorek1 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='wtorek2'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty >= 50 or $godziny == 9 and $minuty <= 5) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='wtorek2'");
		$wtorek2 = "green";
	}else if ($godziny == 9 and $minuty > 5 and $minuty <= 35){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='wtorek2'");
		$wtorek2 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 9 and $minuty > 35 or $godziny > 9){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='wtorek2'");
		$wtorek2 = "red";
	}}elseif ($row["wartość"] == 1) {
		$wtorek2 = "green";
	}elseif ($row["wartość"] == 2) {
		$wtorek2 = "orange";
	}elseif ($row["wartość"] == 3) {
		$wtorek2 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='wtorek3'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 9 and $minuty >= 40 and $minuty <= 55) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='wtorek3'");
		$wtorek3 = "green";
	}else if ($godziny == 9 and $minuty > 55 or $godziny == 10 and $minuty <= 25){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='wtorek3'");
		$wtorek3 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 10 and $minuty > 25 or $godziny > 10){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='wtorek3'");
		$wtorek3 = "red";
	}}elseif ($row["wartość"] == 1) {
	$wtorek3 = "green";
}elseif ($row["wartość"] == 2) {
	$wtorek3 = "orange";
}elseif ($row["wartość"] == 3) {
	$wtorek3 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='wtorek4'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	 if ($godziny == 10 and $minuty >= 30 and $minuty <=45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='wtorek4'");
		$wtorek4 = "green";
	}else if ($godziny == 10 and $minuty > 45 or $godziny == 11 and $minuty <= 15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='wtorek4'");
		$wtorek4 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 11 and $minuty > 30 or $godziny > 11){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='wtorek4'");
		$wtorek4 = "red";
	}}elseif ($row["wartość"] == 1) {
	$wtorek4 = "green";
}elseif ($row["wartość"] == 2) {
	$wtorek4 = "orange";
}elseif ($row["wartość"] == 3) {
	$wtorek4 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='wtorek5'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 11 and $minuty >= 30 and $minuty <= 45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='wtorek5'");
		$wtorek5 = "green";
	}else if ($godziny == 11 and $minuty > 45 or $godziny ==12 and $minuty <=15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='wtorek5'");
		$wtorek5 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 12 and $minuty > 15 or $godziny > 12){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='wtorek5'");
		$wtorek5= "red";
	}}elseif ($row["wartość"] == 1) {
		$wtorek5 = "green";
	}elseif ($row["wartość"] == 2) {
		$wtorek5 = "orange";
	}elseif ($row["wartość"] == 3) {
		$wtorek5 = "red";
	}break;
	case 3: // Sroda
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='sroda1'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty <= 15) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='sroda1'");
		$sroda1 = "green";
	}else if ($godziny == 8 and $minuty > 15 and $minuty <= 45){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='sroda1'");
		$sroda1 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 8 and $minuty > 45 or $godziny > 8){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='sroda1'");
		$sroda1 = "red";
	}}elseif ($row["wartość"] == 1) {
		$sroda1 = "green";
	}elseif ($row["wartość"] == 2) {
		$sroda1 = "orange";
	}elseif ($row["wartość"] == 3) {
		$sroda1 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='sroda2'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty >= 50 or $godziny == 9 and $minuty <= 5) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='sroda2'");
		$sroda2 = "green";
	}else if ($godziny == 9 and $minuty > 5 and $minuty <= 35){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='sroda2'");
		$sroda2 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 9 and $minuty > 35 or $godziny > 9){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='sroda2'");
		$sroda2 = "red";
	}}elseif ($row["wartość"] == 1) {
		$sroda2 = "green";
	}elseif ($row["wartość"] == 2) {
		$sroda2 = "orange";
	}elseif ($row["wartość"] == 3) {
		$sroda2 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='sroda3'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 9 and $minuty >= 40 and $minuty <= 55) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='sroda3'");
		$sroda3 = "green";
	}else if ($godziny == 9 and $minuty > 55 or $godziny == 10 and $minuty <= 25){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='sroda3'");
		$sroda3 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 10 and $minuty > 25 or $godziny > 10){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='sroda3'");
		$sroda3 = "red";
	}}elseif ($row["wartość"] == 1) {
	$sroda3 = "green";
}elseif ($row["wartość"] == 2) {
	$sroda3 = "orange";
}elseif ($row["wartość"] == 3) {
	$sroda3 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='sroda4'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	 if ($godziny == 10 and $minuty >= 30 and $minuty <=45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='sroda4'");
		$sroda4 = "green";
	}else if ($godziny == 10 and $minuty > 45 or $godziny == 11 and $minuty <= 15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='sroda4'");
		$sroda4 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 11 and $minuty > 30 or $godziny > 11){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='sroda4'");
		$sroda4 = "red";
	}
}elseif ($row["wartość"] == 1) {
	$sroda4 = "green";
}elseif ($row["wartość"] == 2) {
	$sroda4 = "orange";
}elseif ($row["wartość"] == 3) {
	$sroda4 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='sroda5'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 11 and $minuty >= 30 and $minuty <= 45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='sroda5'");
		$sroda5 = "green";
	}else if ($godziny == 11 and $minuty > 45 or $godziny ==12 and $minuty <=15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='sroda5'");
		$sroda5 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 12 and $minuty > 15 or $godziny > 12){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='sroda5'");
		$sroda5 = "red";
	}}elseif ($row["wartość"] == 1) {
		$sroda5 = "green";
	}elseif ($row["wartość"] == 2) {
		$sroda5 = "orange";
	}elseif ($row["wartość"] == 3) {
		$sroda5 = "red";
	}break;
	case 4: // Czwartek
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='czwartek1'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty <= 15) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='czwartek1'");
		$czwartek1 = "green";
	}else if ($godziny == 8 and $minuty > 15 and $minuty <= 45){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='czwartek1'");
		$czwartek1 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 8 and $minuty > 45 or $godziny > 8){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='czwartek1'");
		$czwartek1 = "red";
	}}elseif ($row["wartość"] == 1) {
		$czwartek1 = "green";
	}elseif ($row["wartość"] == 2) {
		$czwartek1 = "orange";
	}elseif ($row["wartość"] == 3) {
		$czwartek1 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='czwartek2'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty >= 50 or $godziny == 9 and $minuty <= 5) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='czwartek2'");
		$czwartek2 = "green";
	}else if ($godziny == 9 and $minuty > 5 and $minuty <= 35){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='czwartek2'");
		$czwartek2 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 9 and $minuty > 35 or $godziny > 9){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='czwartek2'");
		$czwartek2 = "red";
	}}elseif ($row["wartość"] == 1) {
		$czwartek2 = "green";
	}elseif ($row["wartość"] == 2) {
		$czwartek2 = "orange";
	}elseif ($row["wartość"] == 3) {
		$czwartek2 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='czwartek3'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 9 and $minuty >= 40 and $minuty <= 55) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='czwartek3'");
		$czwartek3 = "green";
	}else if ($godziny == 9 and $minuty > 55 or $godziny == 10 and $minuty <= 25){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='czwartek3'");
		$czwartek3 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 10 and $minuty > 25 or $godziny > 10){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='czwartek3'");
		$czwartek3 = "red";
	}}elseif ($row["wartość"] == 1) {
	$czwartek3 = "green";
}elseif ($row["wartość"] == 2) {
	$czwartek3 = "orange";
}elseif ($row["wartość"] == 3) {
	$czwartek3 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='czwartek4'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	 if ($godziny == 10 and $minuty >= 30 and $minuty <=45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='czwartek4'");
		$czwartek4 = "green";
	}else if ($godziny == 10 and $minuty > 45 or $godziny == 11 and $minuty <= 15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='czwartek4'");
		$czwartek4 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 11 and $minuty > 30 or $godziny > 11){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='czwartek4'");
		$czwartek4 = "red";
	}
}elseif ($row["wartość"] == 1) {
	$czwartek4 = "green";
}elseif ($row["wartość"] == 2) {
	$czwartek4 = "orange";
}elseif ($row["wartość"] == 3) {
	$czwartek4 = "red";
}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='czwartek5'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 11 and $minuty >= 30 and $minuty <= 45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='czwartek5'");
		$czwartek5 = "green";
	}else if ($godziny == 11 and $minuty > 45 or $godziny ==12 and $minuty <=15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='czwartek5'");
		$czwartek5 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 12 and $minuty > 15 or $godziny > 12){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='czwartek5'");
		$czwartek5 = "red";
	}}elseif ($row["wartość"] == 1) {
		$czwartek5 = "green";
	}elseif ($row["wartość"] == 2) {
		$czwartek5 = "orange";
	}elseif ($row["wartość"] == 3) {
		$czwartek5 = "red";
	}break;
	case 5: // Piatek
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='piatek1'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty <= 15) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='piatek1'");
		$piatek1 = "green";
	}else if ($godziny == 8 and $minuty > 15 and $minuty <= 45){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='piatek1'");
		$piatek1 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 8 and $minuty > 45 or $godziny > 8){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='piatek1'");
		$piatek1 = "red";
	}}elseif ($row["wartość"] == 1) {
		$piatek1 = "green";
	}elseif ($row["wartość"] == 2) {
		$piatek1 = "orange";
	}elseif ($row["wartość"] == 3) {
		$piatek1 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='piatek2'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 8 and $minuty >= 50 or $godziny == 9 and $minuty <= 5) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='piatek2'");
		$piatek2 = "green";
	}else if ($godziny == 9 and $minuty > 5 and $minuty <= 35){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='piatek2'");
		$piatek2 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 9 and $minuty > 35 or $godziny > 9){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='piatek2'");
		$piatek2 = "red";
	}}elseif ($row["wartość"] == 1) {
		$piatek2 = "green";
	}elseif ($row["wartość"] == 2) {
		$piatek2 = "orange";
	}elseif ($row["wartość"] == 3) {
		$piatek2 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='piatek3'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 9 and $minuty >= 40 and $minuty <= 55) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='piatek3'");
		$piatek3 = "green";
	}else if ($godziny == 9 and $minuty > 55 or $godziny == 10 and $minuty <= 25){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='piatek3'");
		$piatek3 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 10 and $minuty > 25 or $godziny > 10){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='piatek3'");
		$piatek3 = "red";
	}}elseif ($row["wartość"] == 1) {
	$piatek3 = "green";
	}elseif ($row["wartość"] == 2) {
	$piatek3 = "orange";
	}elseif ($row["wartość"] == 3) {
	$piatek3 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='piatek4'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	 if ($godziny == 10 and $minuty >= 30 and $minuty <=45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='piatek4'");
		$piatek4 = "green";
	}else if ($godziny == 10 and $minuty > 45 or $godziny == 11 and $minuty <= 15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='piatek4'");
		$piatek4 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 11 and $minuty > 30 or $godziny > 11){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='piatek4'");
		$piatek4 = "red";
	}
	}elseif ($row["wartość"] == 1) {
	$piatek4 = "green";
	}elseif ($row["wartość"] == 2) {
	$piatek4 = "orange";
	}elseif ($row["wartość"] == 3) {
	$piatek4 = "red";
	}
	$obecnosc = mysqli_query ($db, "SELECT wartość FROM obecność WHERE lekcja='piatek5'");
	$row = mysqli_fetch_assoc($obecnosc);
	if ($row["wartość"] == 0) {
	if ($godziny == 11 and $minuty >= 30 and $minuty <= 45) {
		mysqli_query ($db, "UPDATE obecność SET wartość=1 WHERE lekcja='piatek5'");
		$piatek5 = "green";
	}else if ($godziny == 11 and $minuty > 45 or $godziny ==12 and $minuty <=15){
		mysqli_query ($db, "UPDATE obecność SET wartość=2 WHERE lekcja='piatek5'");
		$piatek5 = "orange"; // Zmiana koloru kratki na spoznienie
	}else if ($godziny == 12 and $minuty > 15 or $godziny > 12){
		mysqli_query ($db, "UPDATE obecność SET wartość=3 WHERE lekcja='piatek5'");
		$piatek5 = "red";
	}}elseif ($row["wartość"] == 1) {
		$piatek5 = "green";
	}elseif ($row["wartość"] == 2) {
		$piatek5 = "orange";
	}elseif ($row["wartość"] == 3) {
		$piatek5 = "red";
	}break;
	default:
	 echo "weekend wypierdalaj";
	 unset($_POST["kod"]);
 }
}else {
  unset($_POST["kod"]);
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
