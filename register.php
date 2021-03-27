<?
session_start();
header('Content-Type: text/html; charset=utf-8');
include 'DBconnect.php';

function checkfield() {
	foreach ($_POST as $key => $value) {
		if (!$_POST[$key]) return 0;
	}
	return 1;
	}

$query = "
	INSERT INTO `userdata`
	(`login`, `email`, `username`, `userlastname`, `password`)
	VALUES (
	'".$_POST['login']."',
	'".$_POST['email']."',
	'".$_POST['username']."',
	'".$_POST['user-lastname']."',
	'".$_POST['password']."');
	";

if (isset($_POST['reg-button']) && checkfield()) {
	if ($_POST['password'] != $_POST['password-confirmation']) {
		echo "<span class='padding'>Пароли не совпадают</span>";
	}
	else {
		$dbh->exec($query);
		header('Location: login.php?justregistered=1');
	}
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
		<title>Регистрация</title>
	</head>
	<body>
		<h1>Форма регистрации</h1>

		<div class="padding">
			<form action="" method="post">
				<input type="text" name="login" placeholder="Введите логин" required>
				<br><br>
				<input type="email" name="email" placeholder="Введите Email" required>
				<br><br>
				<input type="text" name="username" placeholder="Введите имя" required>
				<br><br>
				<input type="text" name="user-lastname" placeholder="Введите фамилию" required>
				<br><br>
				<input type="password" name="password" placeholder="Введите пароль" required>
				<br><br>
				<input type="password" name="password-confirmation" placeholder="Подтвердите пароль" required>
				<br><br>
				<input type="submit" name="reg-button" value="Зарегистрироваться" class="btn btn-success" action=""></input>
				<br><br>
			</form>

			Если Вы уже зарегистрированы, нажмите <a href="login.php">здесь</a>.
			<br><br>
			Вернуться на <a href="index.php">главную</a>.
		</div>
	</body>
</html>