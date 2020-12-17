<?php

$db = mysqli_connect ("localhost", "root", "", "specjalizacja");
$result = mysqli_query ($db, "SELECT * FROM obecność");
$y = mysqli_num_rows($result);
  for ($i=1; $i<=$y ; $i++) {
    if ($i>=1 and $i<=5) {
      for ($x=1; $x<=5 ; $x++) {
        $u=$x;
      }
      $result = mysqli_query ($db, "SELECT * FROM obecność WHERE id=$i");
      $row = mysqli_fetch_assoc($result);
      $poniedziałek[$u]=$row['wartość'];
    }
    elseif ($i>=6 and $i<=10) {
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
  //na górze jest pobranie z bazy danych wartości dla każej lekcji każdego dnia tygodnia
  for ($i=0; $i < 5; $i++) {
    if ($poniedziałek[$i] == 0) {
      $poniedziałek[$i]=="";
    }
    elseif ($poniedziałek[$i] == 1) {
      $poniedziałek[$i]=="green";
    }
    elseif ($poniedziałek[$i] == 2) {
      $poniedziałek[$i]=="orange";
    }
    elseif ($poniedziałek[$i] == 3) {
      $poniedziałek[$i]=="red";
    }
  }
  //powyżej masz pętlę która dla danej godziny dnaego dnia ustawia kolor


echo "<div><a href=DobryAdmin.edit.php alt='edit'>Edit</a></div>";
//na górze masz diva którego najlepiej jakbyś wstawił go na dole i on jest linkiem który prowadzi do pliku edycyjnego
//
?>
<div></div>
