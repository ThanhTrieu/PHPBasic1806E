<?php
if(isset($_POST['btnSub'])){
	$birthDay = $_POST['birthDay'] ?? '';
	$birthDay = trim(strip_tags($birthDay));

	// can lay ra ngay va thang sinh nhat cua nguoi dung(khong quan tam nam)
	if($birthDay){
		// nguoi dung co nhap ngay sinh nhat
		$arrBirthday = explode('-',$birthDay);
		$mBirth = $arrBirthday[1];
		$dBirth = $arrBirthday[2];
		$currentBirth = date('Y') . '-' . $mBirth . '-' . $dBirth;
		$today = date('Y-m-d');
		// so sanh $today vs $currentBirth
		$timeCurrentBirth = strtotime($currentBirth);
		$timeToday = strtotime($today);
		if($timeCurrentBirth < $timeToday){
			header("Location:../index3.php?state=pass");
		} elseif($timeCurrentBirth == $timeToday){
			header("Location:../index3.php?state=happy");
		} else {
			// tinh xem con bao nhieu ngay nua
			$ranTime = $timeCurrentBirth - $timeToday;
			$days = ceil($ranTime/86400);
			header("Location:../index3.php?state=wait&day={$days}");
		}
	} else {
		// nguoi dung khong nhap ngay sinh nhat
		header("Location:../index3.php?state=fail");
	}
	
}