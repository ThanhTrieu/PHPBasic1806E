<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo multi upload</title>
</head>
<body>
	<form method="POST" action="server/multil-up.php" enctype="multipart/form-data">
		<label for="txtFile"> Chon file</label>
		<!-- multiple="multiple" chon nhieu file-->
		<input type="file" name="txtFile[]" multiple="multiple">
		<br>
		<button type="submit" name="btnUp">Up</button>
	</form>
</body>
</html>