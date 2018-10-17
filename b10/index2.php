<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo BTCQ PHP</title>
</head>
<body>
	<?php
		$mess = $_GET['state'] ?? '';
		$name = $_GET['name'] ?? '';
	?>
	<?php if($mess === 'err' || $mess === 'fail'): ?>
		<h3>Vui long nhap lai bien so xe</h3>
	<?php endif; ?>

	<?php if($name): ?>
		<h3>Ban o quan <?= $name; ?></h3>
	<?php endif; ?>

	<form action="server/handle.php" method="post">
		<label for="bienso">Nhap bien so xe</label>
		<input type="text" name="bienso" id="bienso">
		<br>
		<button type="submit" name="btnSub"> Kiem Tra</button>
	</form>
</body>
</html>