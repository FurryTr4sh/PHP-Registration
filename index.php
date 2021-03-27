<?
header('Content-Type: text/html; charset=utf-8');
include 'DBconnect.php';

if ($_GET['authsuccess'] == 1) {
	echo "<span class='padding'>Добро пожаловать в лагерь Наварро! Итак, прибыло пополнение...</span>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="jquery-3.5.1.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<title>Главная страница</title>
	</head>
	<body>
		<h1>Добро пожаловать на наш сайт!</h1>

		<div class="padding">
			<a href="login.php">Авторизоваться</a>
			<br>
			<a href="register.php">Регистрация</a>
		</div>
	</body>
</html>