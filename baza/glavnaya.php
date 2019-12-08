<?php session_start(); 
?>
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
	<br>
	<ul id="spg1">
		<li id="novg1"><a href="" id="ag1">Добро пожаловать!<br></a><img src="kod.png" id="imgg"></li>
       
    </ul>
</div>
</body>
</html>