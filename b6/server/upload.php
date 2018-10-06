<?php
define('PATH_UPLOAD', '../uploads/images/'); // dinh nghia duong dan luu file

// noi tiep nhan va xu ly du lieu file day len
// kiem tra nguoi dung bam upload chua ?
if(isset($_POST['btnSub'])){
	// kiem tra xem nguoi dung co chon file upload len ko
	// $_FILES : bien toan cuc - luu tru cac thong ma file dc day len server(bien kieu mang)
	if(isset($_FILES['txtFile'])){
		// thuc hien upload file
		// kiem tra xem file co loi ko ? neu ko moi upload
		if($_FILES['txtFile']['error'] == 0){
			$nameFile = basename($_FILES['txtFile']['name']);
			$tmpFile  = $_FILES['txtFile']['tmp_name'];
			$typeFile = $_FILES['txtFile']['type'];
			$sizeFile = $_FILES['txtFile']['size'];
			if($tmpFile){
				// upload
				if(checkUploadFileType($typeFile) && checkUploadFileSize($sizeFile)){
					if(move_uploaded_file($tmpFile, PATH_UPLOAD . $nameFile)){
						header("Location:../index2.php?state=success&img={$nameFile}");
					} else {
						header("Location:../index2.php?state=fail");
					}
				} else {
					header("Location:../index2.php?state=cancel");
				}
			}
		} else {
			// thong bao file loi - ko cho upload
			header("Location:../index2.php?state=err");
		}
	}
}

// ham kiem tra su hop le cua kieu anh
function checkUploadFileType($type)
{
	$arrAllowFile = ['image/jpeg','image/png','image/gif','image/jpg'];
	if(in_array($type, $arrAllowFile)){
		return true;
	}
	return false;
}

// ham kiem tra su hop le cua size anh
function checkUploadFileSize($size)
{
	$maxSizeUpload = (1024 * 1024 * 5);
	if($size > $maxSizeUpload){
		return false;
	}
	return true;
}