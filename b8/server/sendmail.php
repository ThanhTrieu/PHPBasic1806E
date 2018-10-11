<?php
if(isset($_POST['btnSend'])){
	$email = $_POST['email'] ?? '';
	$email = trim(strip_tags($email));

	$title = $_POST['title'] ?? '';
	$title = trim(strip_tags($title));

	$content = trim($_POST['content'] ?? '');

	// validate data
	$checkEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
	if(!$checkEmail){
		header("Location:../index.php?state=err1");
	} elseif(empty($title)){
		header("Location:../index.php?state=err2");
	} elseif(empty($content)){
		header("Location:../index.php?state=err3");
	} else {
		$send = mySendMail($email, $title, $content);
		if($send){
			header("Location:../index.php?state=success");
		} else {
			header("Location:../index.php?state=fail");
		}
	}
}

function mySendMail($email, $title, $content)
{
	$header = "From:trieuntgvt3h@gmail.com \r\n"; 
	// $header = "Cc:thanhtrieut3h@gmail.com \r\n"; 
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n"; 

	$send = mail($email, $title, $content, $header);
	if($send){
		return true;
	}
	return false;
}