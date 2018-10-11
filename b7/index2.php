<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo get data cookie</title>
</head>
<body>
	<?php 
		// xoa cookie
		setcookie('myCookie','',time()-3600,'/','',0);
		// lay gia tri cookie ma ben index no tao ra
		$cookie = $_COOKIE['myCookie'] ?? '';
	?>
	<h1>This is cookie : <?= $cookie; ?></h1>
	<a href="index.php"> go to index.php</a>
</body>
</html>