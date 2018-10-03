<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Ajax</title>
	<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<input type="number" id="year" placeholder="enter year number">
		<button type="button" id="checkYear">Check</button>
		<br>
		<h3 id="result"></h3>
	</div>
	<script type="text/javascript">
		$(function(){
			$('#checkYear').click(function(){
				let year = $('#year').val().trim();
				if(year != ''){
					$.ajax({
						url: 'server/checkyear.php',
						type: 'POST',
						data: {y: year},
						beforeSend:function(){
							$('#checkYear').text('Loading...');
						},
						success:function(data){
							$('#checkYear').text('Check');
							$('#result').html(data);
						}
					})
				}
				return false;
			});	
		});
	</script>
</body>
</html>