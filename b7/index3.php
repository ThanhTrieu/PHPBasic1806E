<?php
// khoi tao session
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo session php</title>
</head>
<body>
	<?php
		// tao ra 1 session va gan gia tri cho no
		$_SESSION['myName'] = 'Nguyen Van A';
		$_SESSION['myAge'] = 20;
		$_SESSION['gender'] = 1;
	?>
	<a href="index4.php" title="">go to index4.php</a>
</body>
</html>