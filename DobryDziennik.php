<?php
// Tutaj wklej swojego calego PHP
?>

<!-- 
Prosze o dodanie bazy danych "Obecnosci" z nastepujacymi wierszami o zmiennej int
Poniedzialek1	Poniedzialek2	Poniedzialek3	Poniedzialek4	Poniedzialek5
itd. dla wszystkich dni tygodnia od 1 do 5.
Chodzi o to, ze gdy bedziemy skanowac karte, bedzie zmieniac sie wartosc dla poszczegolnego
dnia. Na przyklad jesli data i godzina bedzie odpowiadac wierszowi Sroda5, to wartosc tego
wiersza zmieni sie na 1(czyli obecnosc), 2(spoznienie powyzej 10 minut),
lub 3(nieobecnosc, jesli w ciagu danej lekcji karta nie zostanie zeskanowana).
-->


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
<div class="obecnosc" style="background-color: <?php $poniedzialek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php $poniedzialek2 ?>">.</div>

<div class="lekcja">Polski: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php $poniedzialek3 ?>">.</div>

<div class="lekcja">Matematyka: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php $poniedzialek4 ?>">.</div>

<div class="lekcja">Matematyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php $poniedzialek5 ?>">.</div>

</div><br>

<div class="dzien">Wtorek

<div class="lekcja">Informatyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php $wtorek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php $wtorek2 ?>">.</div>

<div class="lekcja">Chemia: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php $wtorek3 ?>">.</div>

<div class="lekcja">Matematyka: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php $wtorek4 ?>">.</div>

<div class="lekcja">Fizyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php $wtorek5 ?>">.</div>

</div><br>

<div class="dzien">Środa

<div class="lekcja">W-F: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php $sroda1 ?>">.</div>

<div class="lekcja">W-F: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php $sroda2 ?>">.</div>

<div class="lekcja">W-F: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php $sroda3 ?>">.</div>

<div class="lekcja">Religia: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php $sroda4 ?>">.</div>

<div class="lekcja">Religia: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php $sroda5 ?>">.</div>

</div><br>

<div class="dzien">Czwartek

<div class="lekcja">Matematyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php $czwartek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php $czwartek2 ?>">.</div>

<div class="lekcja">Polski: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php $czwartek3 ?>">.</div>

<div class="lekcja">Biologia: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php $czwartek4 ?>">.</div>

<div class="lekcja">Biologia: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php $czwartek5 ?>">.</div>

</div><br>

<div class="dzien">Piątek

<div class="lekcja">Matematyka: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php $piatek1 ?>">.</div>

<div class="lekcja">Angielski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php $piatek2 ?>">.</div>

<div class="lekcja">Niemiecki: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php $piatek3 ?>">.</div>

<div class="lekcja">Polski: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php $piatek4 ?>">.</div>

<div class="lekcja">Informatyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php $piatek5 ?>">.</div>

</div><br>
</body>
</html>
