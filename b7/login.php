<?php
session_start();
require 'checkLogin.php';
checkLogined();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
</head>
<body>
	<div class="container">
		<h3>Admin login</h3>
		<form action="server/handle.php" method="POST">
			<label for="user">Username : </label>
			<input type="text" name="user" id="user">
			<br>
			<label for="pass">Password : </label>
			<input type="password" name="pass" id="pass">
			<br>
			<button type="submit" name="btnLogin">Login</button>
		</form>
	</div>
</body>
</html>