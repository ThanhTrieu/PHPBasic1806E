<?php 
session_start();
require 'checkLogin.php';
checkAdminLogin();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home page</title>
</head>
<body>
	<?php
	  $user = $_SESSION['user'] ?? '';
	?>
	<h1> Welcome <?= $user; ?></h1>
	<a href="logout.php" title="logout">logout</a>
</body>
</html>