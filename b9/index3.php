<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo date php</title>
</head>
<body>
	<?php
		$mess = $_GET['state'] ?? '';
		$day = $_GET['day'] ?? '';
	?>

	<?php if($mess === 'fail'): ?>
		<h3>Vui long nhap ngay thang</h3>
	<?php endif; ?>

	<?php if($mess === 'pass'): ?>
		<h3>Sinh nhat cua ban qua roi</h3>
	<?php endif; ?>

	<?php if($mess === 'happy'): ?>
		<h3>chuc mung sinh nhat</h3>
	<?php endif; ?>

	<?php if($mess === 'wait'): ?>
		<h3>Con <?= $day ?> ngay nua toi sinh nhat ban</h3>
	<?php endif; ?>


	<div class="container">
		<form action="handle/date.php" method="POST">
			<label for="birthDay"> Nam sinh </label>
			<input type="date" name="birthDay">
			<br>
			<button type="submit" name="btnSub">Kiem tra</button>
		</form>
	</div>
</body>
</html>