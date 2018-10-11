<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo delete session</title>
</head>
<body>
	<?php 
		// 1 - xoa toan bo session da dc tao ra
		session_destroy();
		// 2 - xoa tung session 
		// unset($_SESSION['myAge']);
	?>
	<a href="index4.php" title=""> back to index4.php</a>
</body>
</html>