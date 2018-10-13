<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo send mail php</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			border: 0;
		}
		.container{
			width: 500px;
			margin: 10px auto;
		}
		h2.title{
			text-align: center;
			color: blue;
		}
		form{
			width: 100%;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		div.from-group{
			width: 100%;
			display: block;
			margin: 5px 0px;
		}
		.form-control{
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 3px;
			/*height: 28px;*/
		}
		input.form-control{
			height: 32px;
			padding: 0px 5px;
		}
		button{
			padding: 10px 20px;
			border:1px solid red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="title">Demo send mail</h2>
		<form action="server/sendmail.php" method="post">
			<div class="from-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="from-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" name="title" id="title">
			</div>
			<div class="from-group">
				<label for="content">Content</label>
				<textarea class="form-control" name="content" id="content" rows="10"></textarea>
			</div>
			<button type="submit" name="btnSend">Send mail</button>
		</form>
	</div>
</body>
</html>