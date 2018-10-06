<?php
define('PATH_UPLOAD', '../uploads/images/'); // dinh nghia duong dan luu file

if(isset($_POST['btnUp'])){
	if(isset($_FILES['txtFile'])){
		// echo "<pre>";
		// print_r($_FILES);
		$totalFile = count($_FILES['txtFile']['tmp_name']);
		// duyet qua cac thanh con nam ben trong mang lon $_FILES
		$checkFlag = false;
		foreach($_FILES['txtFile']['tmp_name'] as $key => $item){
			// muon kiem tra tung file co loi hay ko?
			if($_FILES['txtFile']['error'][$key] == 0){
				// lay ten tung file
				$nameFile = $_FILES['txtFile']['name'][$key];
				$tmp_name = $_FILES['txtFile']['tmp_name'][$key];
				if($tmp_name){
					if(move_uploaded_file($tmp_name,PATH_UPLOAD . $nameFile)){
						$checkFlag  = true;
					}
				}
			}
		}

		if($checkFlag){
			header("Location:../index3.php?state=ok");
		} else {
			header("Location:../index3.php?state=fail");
		}
	}
}