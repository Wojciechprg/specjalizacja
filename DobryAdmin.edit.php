<?php
$db = mysqli_connect ("localhost", "root", "", "specjalizacja");
if (isset($_GET['zajecia'])) {
  $zajecia=$_GET['zajecia'];
  $obecności=$_GET['obecnosc'];
  echo $zajecia;
  echo $obecności;
  mysqli_query($db, "UPDATE obecność SET wartość='$obecności' WHERE lekcja='$zajecia'");
}
?>

<html>
<head>
<style>
	body{
	background-image: linear-gradient(white, #99CCFF);
	font-size:30px;
	}
.allbox{
		padding:30px;
	}
.zajeciabox{
}
input[type=submit]{
	width: 160px;
	height: 50px;
	background-color: #95cce6;
	margin-left:0px;
	margin-top:20px;
	border-radius:20px;
	color:black;
	border-style: hidden;
	padding:0;
	outline: 0 !important;
}
input:hover{
	background: rgb(106,161,187);
	background: radial-gradient(circle, rgba(106,161,187,1) 61%, rgba(255,255,255,0.3) 93%);
}
.button{
	background-color:red;
}
.custom-select {
  position: relative;
  font-family: Comic Sans;
}

.custom-select select {
  display: none; 
}

.select-selected {
  background-color:#95cce6;
}

.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: transparent transparent transparent transparent;
}

.select-selected.select-arrow-active:after {
  border-color: transparent transparent transparent transparent;
  top: 7px;
}

.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 100, 0.3) transparent;
  cursor: pointer;
  user-select: none;
}

.select-items {
  position: absolute;
  background-color: #95cce6;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 100, 0.3);
}
</style>
</head>
<body>

<form action="DobryAdmin.edit.php">
<div class="allbox">
<div class="zajeciabox">
Zajęcia:
</div>
<div class="custom-select" style="width:400px;">
<select name=zajecia>";
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
</div>
<div class="typbox">
Typ obecności:
</div>
<div class="custom-select" style="width:400px;">
<select name=obecnosc>
<option value=1>Obecny</option>
<option value=2>Spozniony</option>
<option value=3>Nieobecny</option>
</select><br>
</div>
<input type="submit" value="Zmien">
<div><form metod="post" action="DobryAdmin.php">
				<input type="submit" value="Powrót do panelu admina"/>
			</form></div>
</div>
</form>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>
