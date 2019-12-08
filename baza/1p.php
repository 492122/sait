<?php session_start(); ?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body id="bodygl">
	<a href="glavnaya.php"><button id="b1"></button></a>
<div id="d1">Коды C++</div>
<?php 
require("tablavt.php");
?>
<div id="sp1">
<ul id="ul1">
	<a href="1p.php" id="ast1"><li id="st1">Простые операции</li></a>
	<a href="2p.php" id="ast1"><li id="st1">Операторы if, else</li></a>
	<a href="3p.php" id="ast1"><li id="st1">Цикл while</li></a>
	<a href="4p.php" id="ast1"><li id="st1">Цикл for</li></a>
	<a href="5p.php" id="ast1"><li id="st1">Массив</li></a>
	<a href="6p.php" id="ast1"><li id="st1">Вектор</li></a>
</ul>
</div>
<div id="cont1">
	<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'a')">Сумма</button>
  <button class="tablinks" onclick="openCity(event, 'b')">Деление</button>
  <button class="tablinks" onclick="openCity(event, 'c')">Остаток от деления</button>
  <button class="tablinks" onclick="openCity(event, 'd')">Вычитание</button>
  <button class="tablinks" onclick="openCity(event, 'f')">Умножение</button>

</div>

 <div id="a" class="tabcontent">
  <h1>Сумма</h1>
  <img src="summa.png" id="me1">
  
</div>
<div id="b" class="tabcontent">
  <h3>Деление</h3>
 <img src="delenie.png" id="me1">

    <br>
  <br>
  </div>
<div id="c" class="tabcontent">
  <h1>Остаток от деления</h1>
 <img src="ostatok.png" id="me1">
    <br>
  <br>
</div>
<div id="d" class="tabcontent">
  <h1>Вычитание</h1>
 <img src="vit.png" id="me1">
  
    <br>
  <br>
</div>
<div id="f" class="tabcontent">
  <h1>Умножение</h1>
  <img src="mnog.png" id="me1">
    <br>
  <br>
</div>

<script type="text/javascript">
	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</div>
</body>
</html>
