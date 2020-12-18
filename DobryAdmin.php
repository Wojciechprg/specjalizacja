<?php

$db = mysqli_connect ("localhost", "root", "", "specjalizacja");
$result = mysqli_query ($db, "SELECT * FROM obecność");
$y = mysqli_num_rows($result);
//  for ($i=1; $i<=$y ; $i++) {
//    if ($i>=1 and $i<=5) {
//     for ($x=1; $x<=5 ; $x++) {
//        $u=$x;
//      }


//    }

  //na górze jest pobranie z bazy danych wartości dla każej lekcji każdego dnia tygodnia
  //for ($i=0; $i < 5; $i++) {
  //  if ($poniedziałek[$i] == 0) {
  //    $poniedziałek[$i]=="";
  //  }
  //  elseif ($poniedziałek[$i] == 1) {
  //    $poniedziałek[$i]=="green";
  //  }
  //  elseif ($poniedziałek[$i] == 2) {
  //    $poniedziałek[$i]=="orange";
  //  }
  //  elseif ($poniedziałek[$i] == 3) {
  //    $poniedziałek[$i]=="red";
  //  }
  //}
  //powyżej masz pętlę która dla danej godziny dnaego dnia ustawia kolor
//na górze masz diva którego najlepiej jakbyś wstawił go na dole i on jest linkiem który prowadzi do pliku edycyjnego
//
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=1");
$row = mysqli_fetch_assoc($result);
$poniedziałek1=$row['wartość'];
if ($poniedziałek1 == 0) {
  $poniedziałek1 ="";
}
elseif ($poniedziałek1 == 1) {
  $poniedziałek1="green";
}
elseif ($poniedziałek1 == 2) {
  $poniedziałek1="orange";
}
elseif ($poniedziałek1 == 3) {
  $poniedziałek1 ="red";
}

$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=2");
$row = mysqli_fetch_assoc($result);
$poniedziałek2=$row['wartość'];
if ($poniedziałek2 == 0) {
  $poniedziałek2 ="";
}
elseif ($poniedziałek2 == 1) {
  $poniedziałek2="green";
}
elseif ($poniedziałek2 == 2) {
  $poniedziałek2="orange";
}
elseif ($poniedziałek2 == 3) {
  $poniedziałek2 ="red";
}

$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=3");
$row = mysqli_fetch_assoc($result);
$poniedziałek3=$row['wartość'];
if ($poniedziałek3 == 0) {
  $poniedziałek3 ="";
}
elseif ($poniedziałek3 == 1) {
  $poniedziałek3="green";
}
elseif ($poniedziałek3 == 2) {
  $poniedziałek3="orange";
}
elseif ($poniedziałek3 == 3) {
  $poniedziałek3 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=4");
$row = mysqli_fetch_assoc($result);
$poniedziałek4=$row['wartość'];
if ($poniedziałek4 == 0) {
  $poniedziałek4 ="";
}
elseif ($poniedziałek4 == 1) {
  $poniedziałek4="green";
}
elseif ($poniedziałek4 == 2) {
  $poniedziałek4="orange";
}
elseif ($poniedziałek4 == 3) {
  $poniedziałek4 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=5");
$row = mysqli_fetch_assoc($result);
$poniedziałek5=$row['wartość'];
if ($poniedziałek5 == 0) {
  $poniedziałek5 ="";
}
elseif ($poniedziałek5 == 1) {
  $poniedziałek5="green";
}
elseif ($poniedziałek5 == 2) {
  $poniedziałek5="orange";
}
elseif ($poniedziałek5 == 3) {
  $poniedziałek5 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=6");
$row = mysqli_fetch_assoc($result);
$wtorek1=$row['wartość'];
if ($wtorek1 == 0) {
  $wtorek1 ="";
}
elseif ($wtorek1 == 1) {
  $wtorek1="green";
}
elseif ($wtorek1 == 2) {
  $wtorek1="orange";
}
elseif ($wtorek1 == 3) {
  $wtorek1 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=7");
$row = mysqli_fetch_assoc($result);
$wtorek2=$row['wartość'];
if ($wtorek2 == 0) {
  $wtorek2 ="";
}
elseif ($wtorek2 == 1) {
  $wtorek2="green";
}
elseif ($wtorek2 == 2) {
  $wtorek2="orange";
}
elseif ($wtorek2 == 3) {
  $wtorek2 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=8");
$row = mysqli_fetch_assoc($result);
$wtorek3=$row['wartość'];
if ($wtorek3 == 0) {
  $wtorek3 ="";
}
elseif ($wtorek3 == 1) {
  $wtorek3="green";
}
elseif ($wtorek3 == 2) {
  $wtorek3="orange";
}
elseif ($wtorek3 == 3) {
  $wtorek3 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=9");
$row = mysqli_fetch_assoc($result);
$wtorek4=$row['wartość'];
if ($wtorek4 == 0) {
  $wtorek4 ="";
}
elseif ($wtorek4 == 1) {
  $wtorek4="green";
}
elseif ($wtorek4 == 2) {
  $wtorek4="orange";
}
elseif ($wtorek4 == 3) {
  $wtorek4 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=10");
$row = mysqli_fetch_assoc($result);
$wtorek5=$row['wartość'];
if ($wtorek5 == 0) {
  $wtorek5 ="";
}
elseif ($wtorek5 == 1) {
  $wtorek5="green";
}
elseif ($wtorek5 == 2) {
  $wtorek5="orange";
}
elseif ($wtorek5 == 3) {
  $wtorek5 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=11");
$row = mysqli_fetch_assoc($result);
$sroda1=$row['wartość'];
if ($sroda1 == 0) {
  $sroda1 ="";
}
elseif ($sroda1 == 1) {
  $sroda1="green";
}
elseif ($sroda1 == 2) {
  $sroda1="orange";
}
elseif ($sroda1 == 3) {
  $sroda1 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=12");
$row = mysqli_fetch_assoc($result);
$sroda2=$row['wartość'];
if ($sroda2 == 0) {
  $sroda2 ="";
}
elseif ($sroda2 == 1) {
  $sroda2="green";
}
elseif ($sroda2 == 2) {
  $sroda2="orange";
}
elseif ($sroda2 == 3) {
  $sroda2 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=13");
$row = mysqli_fetch_assoc($result);
$sroda3=$row['wartość'];
if ($sroda3 == 0) {
  $sroda3 ="";
}
elseif ($sroda3 == 1) {
  $sroda3="green";
}
elseif ($sroda3 == 2) {
  $sroda3="orange";
}
elseif ($sroda3 == 3) {
  $sroda3 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=14");
$row = mysqli_fetch_assoc($result);
$sroda4=$row['wartość'];
if ($sroda4 == 0) {
  $sroda4 ="";
}
elseif ($sroda4 == 1) {
  $sroda4="green";
}
elseif ($sroda4 == 2) {
  $sroda4="orange";
}
elseif ($sroda4 == 3) {
  $sroda4 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=15");
$row = mysqli_fetch_assoc($result);
$sroda5=$row['wartość'];
if ($sroda5 == 0) {
  $sroda5 ="";
}
elseif ($sroda5 == 1) {
  $sroda5="green";
}
elseif ($sroda5 == 2) {
  $sroda5="orange";
}
elseif ($sroda5 == 3) {
  $sroda5 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=16");
$row = mysqli_fetch_assoc($result);
$czwartek1=$row['wartość'];
if ($czwartek1 == 0) {
  $czwartek1 ="";
}
elseif ($czwartek1 == 1) {
  $czwartek1="green";
}
elseif ($czwartek1 == 2) {
  $czwartek1="orange";
}
elseif ($czwartek1 == 3) {
  $czwartek1 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=17");
$row = mysqli_fetch_assoc($result);
$czwartek2=$row['wartość'];
if ($czwartek2 == 0) {
  $czwartek2 ="";
}
elseif ($czwartek2 == 1) {
  $czwartek2="green";
}
elseif ($czwartek2 == 2) {
  $czwartek2="orange";
}
elseif ($czwartek2 == 3) {
  $czwartek2 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=18");
$row = mysqli_fetch_assoc($result);
$czwartek3=$row['wartość'];
if ($czwartek3 == 0) {
  $czwartek3 ="";
}
elseif ($czwartek3 == 1) {
  $czwartek3="green";
}
elseif ($czwartek3 == 2) {
  $czwartek3="orange";
}
elseif ($czwartek3 == 3) {
  $czwartek3 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=19");
$row = mysqli_fetch_assoc($result);
$czwartek4=$row['wartość'];
if ($czwartek4 == 0) {
  $czwartek4 ="";
}
elseif ($czwartek4 == 1) {
  $czwartek4="green";
}
elseif ($czwartek4 == 2) {
  $czwartek4="orange";
}
elseif ($czwartek4 == 3) {
  $czwartek4 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=20");
$row = mysqli_fetch_assoc($result);
$czwartek5=$row['wartość'];
if ($czwartek5 == 0) {
  $czwartek5 ="";
}
elseif ($czwartek5 == 1) {
  $czwartek5="green";
}
elseif ($czwartek5 == 2) {
  $czwartek5="orange";
}
elseif ($czwartek5 == 3) {
  $czwartek5 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=21");
$row = mysqli_fetch_assoc($result);
$piatek1=$row['wartość'];
if ($piatek1 == 0) {
  $piatek1 ="";
}
elseif ($piatek1 == 1) {
  $piatek1="green";
}
elseif ($piatek1 == 2) {
  $piatek1="orange";
}
elseif ($piatek1 == 3) {
  $piatek1 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=22");
$row = mysqli_fetch_assoc($result);
$piatek2=$row['wartość'];
if ($piatek2 == 0) {
  $piatek2 ="";
}
elseif ($piatek2 == 1) {
  $piatek2="green";
}
elseif ($piatek2 == 2) {
  $piatek2="orange";
}
elseif ($piatek2 == 3) {
  $piatek2 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=23");
$row = mysqli_fetch_assoc($result);
$piatek3=$row['wartość'];
if ($piatek3 == 0) {
  $piatek3 ="";
}
elseif ($piatek3 == 1) {
  $piatek3="green";
}
elseif ($piatek3 == 2) {
  $piatek3="orange";
}
elseif ($piatek3 == 3) {
  $piatek3 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=24");
$row = mysqli_fetch_assoc($result);
$piatek4=$row['wartość'];
if ($piatek4 == 0) {
  $piatek4 ="";
}
elseif ($piatek4 == 1) {
  $piatek4="green";
}
elseif ($piatek4 == 2) {
  $piatek4="orange";
}
elseif ($piatek4 == 3) {
  $piatek4 ="red";
}
$result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=25");
$row = mysqli_fetch_assoc($result);
$piatek5=$row['wartość'];
if ($piatek5 == 0) {
  $piatek5 ="";
}
elseif ($piatek5 == 1) {
  $piatek5="green";
}
elseif ($piatek5 == 2) {
  $piatek5="orange";
}
elseif ($piatek5 == 3) {
  $piatek5 ="red";
}
?>
<!-- elseif ($i>=6 and $i<=10) {
  for ($x=1; $x<=5 ; $x++) {
    $u=$x;
  }
  $result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=$i");
  $row = mysqli_fetch_assoc($result);
  $wtorek[$u]=$row['wartość'];
}
elseif ($i>=11 and $i<=15){
  for ($x=1; $x<=5 ; $x++) {
    $u=$x;
  }
  $result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=$i");
  $row = mysqli_fetch_assoc($result);
  $sroda[$u]=$row['wartość'];
}
elseif ($i>=16 and $i<=20){
  for ($x=1; $x<=5 ; $x++) {
    $u=$x;
  }
  $result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=$i");
  $row = mysqli_fetch_assoc($result);
  $czwartek[$u]=$row['wartość'];
}
elseif ($i>=21 and $i<=25){
  for ($x=1; $x<=5 ; $x++) {
    $u=$x;
  }
  $result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=$i");
  $row = mysqli_fetch_assoc($result);
  $piatek[$u]=$row['wartość'];
}
}
-->
<html>
<meta charset="UTF-8" />
<head>
<link rel="stylesheet" href="DobryDziennik.css">
</head>
<style>
a:link{
  text-align: center;
  color: lightblue;
}

</style>
<header>
<center><a href="PrzylozKarte.html">DobryAdmin</a></center>
</header>
<body>

<div class="dzien">Poniedziałek

<div class="lekcja">Historia: 8:00 - 8:45 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedziałek1 ?>">.</div>

<div class="lekcja">Polski: 8:50 - 9:35 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedziałek2 ?>">.</div>

<div class="lekcja">Polski: 9:40 - 10:25 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedziałek3 ?>">.</div>

<div class="lekcja">Matematyka: 10:30 - 11:15 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedziałek4 ?>">.</div>

<div class="lekcja">Matematyka: 11:30 - 12:15 </div>
<div class="obecnosc" style="background-color: <?php echo $poniedziałek5 ?>">.</div>

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

<a href=DobryAdmin.edit.php alt='edit'>Edit</a>

</div><br>
</body>
</html>
