<?php
// khoi tao session
session_start();

if(isset($_POST['btnLogin'])){
	// username
	$username = trim($_POST['user'] ?? '');
	$username = strip_tags($username);

	$pass = trim($_POST['pass'] ?? '');
	$pass = strip_tags($pass);

	if(empty($username) || empty($pass)){
		header("Location:../login.php?state=fail");
	} else {
		// doc du lieu trong file ra
		$fp = fopen('data.txt','r');
		if($fp){
			$data = fread($fp,filesize('data.txt'));
			// close file
			fclose($fp);
			// check dang nhap o day
			$arrInfoData = explode('/',$data);
			if($arrInfoData[0] == $username && $arrInfoData[1] == $pass){
				// can tao ra cac session luu thong tin cua nguoi dang nhap -  de phuc vu cho cac cong viec sau nay
				$_SESSION['user'] = $username;
				header("Location:../home.php");
			} else {
				header("Location:../login.php?state=err");
			}

		} else {
			header("Location:../login.php?state=cancel");
		}
	}
}