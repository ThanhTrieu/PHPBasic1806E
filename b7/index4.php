<?php 
// khoi tao lai session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo get data session</title>
</head>
<body>
	<?php  
		// lay gia tri session ma ben index3 tao ra
		$name = $_SESSION['myName'] ?? '';
		$age  = $_SESSION['myAge'] ?? '';
		$gender = $_SESSION['gender'] ?? '';
	?>
	<h2> My name : <?= $name; ?></h2>
	<h2>My age : <?= $age; ?></h2>

	<a href="index5.php" title="">delete SESSION</a>
	<br>
	<a href="index3.php" title=""> back page</a>
</body>
</html>