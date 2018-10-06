<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo upload file server</title>
</head>
<body>
	<?php
		$mess = $_GET['state'] ?? ''; 
		$img  = $_GET['img'] ?? '';
		define('UPLOAD_PATH', 'uploads/images/'); // duong dan de hien thi anh
		
	?>

	<?php if($mess === 'success'): ?>
		<h3 style="color: green;">Upload file thanh cong</h3>
		<?php if($img): ?>
			<img src="<?= UPLOAD_PATH . $img; ?>" height="150" width="150">
		<?php endif; ?>
	<?php endif; ?>

	<?php if($mess === 'fail' || $mess === 'err'): ?> 
		<h3 style="color: red;">Co loi xay ra</h3>
	<?php endif; ?>

	<form action="server/upload.php" method="POST" enctype="multipart/form-data">
		<label for="txtFile">moi chon fiel</label>
		<input type="file" name="txtFile" id="txtFile">
		<br>
		<button type="submit" name="btnSub"> Upload</button>
	</form>
</body>
</html>
