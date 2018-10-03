<?php 
// lam viec cac method send data co ban trong php
// 1- GET
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo method GET</title>
</head>
<body>
	<a href="index3.php?id=1&name=abc&age=20" title="demo get"> goto index3.php</a>
	<br>
	<form action="index3.php" method="GET">
		<label for="username">Username : </label>
		<input type="text" name="username" id="username">
		<br>
		<button type="submit" name="send"> Send data</button>
	</form>
	<br>
	<form action="index3.php" method="POST">
		<label for="hsa"> A : </label>
		<input type="text" name="hsa" id="hsa">
		<br>
		<label for="hsb"> B : </label>
		<input type="text" name="hsb" id="hsb">
		<br>
		<button type="submit" name="sum"> Sum number</button>
	</form>
</body>
</html>