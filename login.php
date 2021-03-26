<?
header('Content-Type: text/html; charset=utf-8');
include 'DBconnect.php';

/*$query = "

"

if (isset($_POST['log-button'])) {
	$dbh->exec($query);
}*/
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="jquery-3.5.1.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<title>Авторизация</title>
	</head>
	<body>
		<h1>Форма авторизации</h1>

		<div class="padding">
			<form action="" method="post">
				<input type="text" name="login" placeholder="Введите логин">
				<br><br>
				<input type="password" name="password" placeholder="Введите пароль">
				<br><br>
				<input type="submit" name="log-button" value="Авторизоваться" class="btn btn-success"></input>
				<br><br>
			</form>

			Если Вы ещё не зарегистрированы, нажмите <a href="register.php">здесь</a>.
			<br><br>
			Вернуться на <a href="index.php">главную</a>.
		</div>
	</body>
</html>