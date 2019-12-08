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
<div id="dr1">
	<a href="regformigr.php" id="regigra"><button id="b2">Регисрация для <br> преподавателей</button></a>
	<h1 id="hr1"> Регистрация пользователей </h1>
		<form method="post" action='reg.php'>
		
			<br>
			<p id="regp1">
			
			
			<input type="text" name="username" id="in1" placeholder="Логин">
		</p>
			<br>
			<p id="regp1">
			
			
			<input type="password" name="password" id="in1" placeholder="Пароль">
		</p>
			<br>
			<p id="regp1">
			
			
			<input type="password" name="password_r" id="in1" placeholder="Повторите пароль">
		</p>
			<br>
			<p id="regp1">
			<input type="text" name="name_pol" placeholder="Имя пользователя">
			</p>
			<br>

			<input type="submit" value="Зарегистрироваться" id="otp1">
		</form>
		
		<p id="prf1">Если вы уже зарегистрированы. 
		<a class="ar1" href="glavnaya.php" id="arf1">Выход</a>

	</p>
</div>
</div>
<div id="divr2"></div>
<div id="divr3"></div>
</body>
</html>