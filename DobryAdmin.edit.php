<?php
$db = mysqli_connect ("localhost", "root", "", "specjalizacja");
$zajecia=$_GET['zajecia'];
$obecności=$_GET['obecności'];
mysqli_query($con, "UPDATE obecność SET wartość='$obecności',  WHERE lekcja=$zajecia");
// zrób selecta do wyboru zajecia w którym nauczyciel chce zmienić dla danych zajec obecność
//"Zajęcia: <select name=zajecia>";
//			"<option value=poniedziałek1>Poniedziałek1</option>";
//			"<option value=poniedziałek2>Poniedziałek2</option>";
//      <option>tak dla kazdego </option>
//		"</select><br>";
// Typ obecności <select name=obecnosc>";
//			"<option value=1>obecny</option>";
//			"<option value=2>spóźniony</option>";
//      <option value=3>nieobecny </option>
//		"</select><br>";
// na samym dole daj jeszcze href do DobryAdmin.php żeby wrócić do strony admina
?>

<html>
<body>

<form action="DobryAdmin.php">
"Zajęcia: <select name=zajecia>";
<option value=poniedzialek1>Poniedzialek1</option>
<option value=poniedzialek2>Poniedzialek2</option>
<option value=poniedzialek3>Poniedzialek3</option>
<option value=poniedzialek4>Poniedzialek4</option>
<option value=poniedzialek5>Poniedzialek5</option>
<option value=wtorek1>Wtorek1</option>
<option value=wtorek2>Wtorek2</option>
<option value=wtorek3>Wtorek3</option>
<option value=wtorek4>Wtorek4</option>
<option value=wtorek5>Wtorek5</option>
<option value=sroda1>Sroda1</option>
<option value=sroda2>Sroda2</option>
<option value=sroda3>Sroda3</option>
<option value=sroda4>Sroda4</option>
<option value=sroda5>Sroda5</option>
<option value=czwartek1>Czwartek1</option>
<option value=czwartek2>Czwartek2</option>
<option value=czwartek3>Czwartek3</option>
<option value=czwartek4>Czwartek4</option>
<option value=czwartek5>Czwartek5</option>
<option value=piatek1>Piatek1</option>
<option value=piatek2>Piatek2</option>
<option value=piatek3>Piatek3</option>
<option value=piatek4>Piatek4</option>
<option value=piatek5>Piatek5</option>
</select><br>
Typ obecności <select name=obecnosc>
<option value=1>Obecny</option>
<option value=2>Spozniony</option>
<option value=3>Nieobecny</option>
</select><br>
<input type="submit" value="Zmien">
</form>

</body>
</html>