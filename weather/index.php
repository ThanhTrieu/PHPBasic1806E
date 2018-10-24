<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo weather</title>
	<script src="public/js/jquery-3.3.1.js" type="text/javascript"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		div.container{
			width: 980px;
			margin: 10px auto;
		}
		div.header{
			width: 100%;
			padding: 20px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
		}
		input[type='text']{
			width: 890px;
			height: 32px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		button[type='button']{
			padding: 10px 20px;
			border: 1px solid #ccc;
		}
		button[type='button']:hover{
			cursor: pointer;
		}
		div.content{
			padding: 20px;
			border:1px solid #ccc;
			display: none;
		}
		div.loading{
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<input type="text" name="cityName" id="cityName">
			<button type="button" id="btnSearch"> Search </button>
		</div>
		<div class="loading">
			<img src="public/image/loading.gif" alt="loading">
		</div>
		<div class="content">
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			// bat su kien cho nut search
			$('#btnSearch').click(function(){
				// lay ten thanh pho ma nguoi dung nhap vao otext
				let nameCity = $('#cityName').val().trim();
				if(nameCity.length){
					$.ajax({
						url: "controller/weather.php",
						type: "POST",
						data: {nameCity :  nameCity},
						beforeSend: function(){
							$('.loading').show();
							$('.content').hide();
						},
						success: function(result){
							$('.loading').hide();
							// xu ly du lieu tu server tra ve
							$('.content').html(result);
							$('.content').show();
						}
					});
				}
				return false;
			});
		});
	</script>
</body>
</html>