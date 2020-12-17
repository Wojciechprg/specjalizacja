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
