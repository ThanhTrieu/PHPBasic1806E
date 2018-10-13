<?php
require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';
// su dung thu vien
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


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
	// viet ham send mail dua vao thu vien phpmailer
	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    // hien thi loi khi ko send dc mail
	    // 2 - hien loi
	    // 0 - khong hien loi
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    // su dung giao thuc smtp : send mail
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'trieuntgvt3h@gmail.com';                 // SMTP username
	    $mail->Password = 'trieunt123';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('trieuntgvt3h@gmail.com', 'TrieuNT');
	    $mail->addAddress($email);               // Name is optional
	    $mail->addCC('nguyenthanhtrieu90@gmail.com');

	    //Attachments
	    $mail->addAttachment('images/test.jpg');         // Add attachments
	    $mail->addAttachment('images/test.jpg');    // Optional name
	    $mail->addAttachment('images/test.jpg');  

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $title;
	    $mail->Body    = $content;
	    if($mail->send()){
	    	return true;
	    }
	    return false;
	} catch (Exception $e) {
	    var_dump($mail->ErrorInfo);
	}
}