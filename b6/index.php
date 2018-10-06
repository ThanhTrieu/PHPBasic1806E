<?php
// cac ham bo tro filter_var
// 1 - kiem tra tinh dung dan cua du lieu
$email = "test@gmail.com";
// kiem tra email
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "Yes";
} else {
	echo "No";
}
echo "<br>";

// kiem tra url
$url = "http://abc.com";
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "OK";
} else {
	echo "Fail";
}
echo "<br>";

// kiem tra kieu boolean
$checkFlag = true;
if(filter_var($checkFlag, FILTER_VALIDATE_BOOLEAN)){
	echo "Y";
} else {
	echo "N";
}
echo "<br>";

// kiem tra kieu so : int or float
$number = 100;
$pi = 3.14;
//FILTER_VALIDATE_FLOAT : so thuc
//FILTER_VALIDATE_INT : so nguyen
if(filter_var($pi, FILTER_VALIDATE_FLOAT)){
	echo "True";
} else {
	echo "False";
}
echo "<br>";

// 2 - xoa bo di cac du lieu bat hop le - khong mong muon
// danh cho email
$email2 = "123~%&ế(*^^^)@gamil.com";
$newEmail = filter_var($email2,FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo "<br>";

// danh cho url
$url2 = "http://acbế~&*@#$.com";
$newUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $newUrl;
echo "<br>";

// danh cho chuoi
$string = "<script>alert('hi')</script>";
//echo $string;
$newStr = filter_var($string,FILTER_SANITIZE_STRING);
echo $newStr;
echo "<br>";

// danh cho so
$myNumber = "-123abc";
$newNumber = filter_var($myNumber, FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;

