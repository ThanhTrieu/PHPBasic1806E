<?php
// kiem tra xem nguoi dung login hay chua ?
if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));

	$pass = $_POST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		// nguoi dung ko nhap user va pass ma co tinh bam login
		header('Location:../index4.php?state=err');
		// dieu huong trang - di chuyen ve tranh nao do
	} else {
		// can kiem tra xem user va mk co ton tai tronf file txt hay ko?
		// neu co thi nguoi dung nhap chinh xac dl
		// neu ko nguoi dung da nhap linh tinh
		$fp = fopen('Location:../database/mysql.txt', 'r');
		if($fp){
			// can doc du lieu tu db ra
			$db = fread($fp, filesize('../database/mysql.txt'));
			 
			// can so sanh no voi user va mk nguoi dung nhap vao
			$arrdb = explode('/',$db);

			if(trim($arrdb[0]) == $user && trim($arrdb[1]) == $pass){
				// nguoi dung nhap chinh xac
				header('Location:../home.php');
			} else {
				// nguoi dung nhap linh tinh
				header('Location:../index4.php?state=cancel');
			}

		} else {
			header('Location:../index4.php?state=fail');
		}
	}
}