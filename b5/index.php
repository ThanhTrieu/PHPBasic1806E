<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo send data by ajax</title>
	<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.container{
			width: 980px;
			margin: 10px auto;
		}
		form.form-data{
			width: 100%;
			padding: 10px 5px;
		}
		div.form-group{
			width: 100%;
			border: 1px solid #ccc;
			padding: 20px;
		}
		div.form-group input{
			width: 600px;
			height: 28px;
		}
		div.form-group button{
			padding: 8px 20px;
		}
		div.form-group button:hover{
			cursor: pointer;
		}
		#loading{
			display: none;
		}
	</style>
</head>

<body>
	<div class="container">
		<form class="form-data">
			<div class="form-group">
				<label for="msv">Nhap MSV</label>
				<input type="text" id="msv">
				<button type="button" id="search">Search</button>
				<img id="loading" width="50" height="50" src="images/loading.gif" alt="">
			</div>
		</form>
		<br>
		<div class="data" id="result-data">
			<span id="dt-msv"></span>
		</div>
	</div>
	<script type="text/javascript">
		// viet ajax o day
		// viet theo ajax thu vien JQ
		$(function(){
			// bat su kien click vao nut seacrh
			$('#search').click(function(){
				// lay du lieu tu o text nguoi dung nhap vao - masv
				let msv = $('#msv').val().trim();
				if(msv != ''){
					// nguoi dung co nhap masv - moi tim kiem
					// hoc cu phap ajax - JQ
					$.ajax({
						url: 'server/handle.php',
						type: 'POST',
						data: {keyword: msv},
						beforeSend:function(){
							// bao hieu cho nguoi dung - la toi dang xu ly du lieu - vui long cho
							$('#loading').show();
						},
						success: function(data){
							// lang nghe - cho doi ket qua ben phia server tra thong thong tham so nam trong ham (data)
							$('#loading').hide();
							//$('#dt-msv').html(data);
							//vi ben phia serve tra ve kieu json - object js thi phia client phai tiep nhan dung dinh dang cua no
							//let obj = $.parseJSON(data);
							//$('#dt-msv').html(obj.msv);
							$('#result-data').html(data);
						}
					});
				}
				// dung chuong trinh - ko lam gi nua
				return false; 
			});
		});
	</script>
</body>
</html>