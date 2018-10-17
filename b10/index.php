<?php 
// hoc ve bieu thuc chinh quy trong php
$string = "chung ta dang hoc php";
// kiem tra xem trong chuoi co tu php hay ko ? khong duoc su dung cac ham co san xu ly ve chuoi trong php
// su dung bieu thuc chinh quy giai quyet bai toan
$btcq = '/^php$/'; // pattern
// su dung no - thong thuong no se di kem voi ham chuyen biet lam viec voi bieu thuc chinh quy
if(preg_match($btcq,$string,$match)){
	// nghia co tu php nam trong chuoi ma duoc pattern no mo ta chinh xac
	echo "Yes";
	// $match : 1 bien luu cac ket qua tim kiem duoc so khop chinh xac voi bieu thuc chinh quy
	echo "<pre>";
	print_r($match);
} else {
	echo "No";
}
/*****************************************************/
echo "<br>";

$newStr = 'hom nay nay la thu tu';
// kiem tra xem trong chuoi chi chua cac chu cai hoa hay chu cai thuong
$btcq2 = '/^[A-Za-z\s]*$/';
if(preg_match($btcq2, $newStr)){
	echo "OK";
} else {
	echo "ERROR";
}

$number = '100';
$btcq3 = '/\d/'; // [0-9]
// [^0-9] ~~ [A-Za-z]
// \D ~~ [^0-9]
// \w = [0-9A-Za-z];
// \W = [^0-9A-Za-z]
// kiem tra 1 so co 5 chu so va chia het cho 5
$myNumber = '12345';
$btcq4 = '/^[1-9]\d{3}[0,5]$/';
echo "<br>";


if(preg_match($btcq4, $myNumber)){
	echo "OK";
} else {
	echo "ERROR";
}

$btcq5 = '/^[1-9][0,2,4,6,8]\d[^0,2,4,6,8]\d[0,5]$/';
$myPattern = '/^0(9[6-8]|86)\d{7}$|^0(9[1,4]|88)\d{7}$|^0(9[0,3])\d{7}$/';

// kim tra dinh dang ngay thang theo chuan cua viet nam
// dd/mm/yyyy
// 2018/08/20;
// 01/02/2018
// viet bieu thuc chinh quy kiem tra viec nay
echo "<br>";
$myDay = '30/02/2018';
$btcq6 = '/^(0[1-9]|1\d|2\d|3[0,1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';
if(preg_match($btcq6,$myDay,$match)){
	//echo "<pre>";
	//print_r($match);
	$month = (int) $match[2];
	$year  = (int) $match[3];
	$days  = (int) $match[1];
	// lam viec rieng cho thang 2
	if($month == 2){
		if($days == 29) {
			// kiem tra nam
			if($year % 400 == 0){
				echo "OK";
			} elseif($year % 4 == 0 && $year % 100 !=0){
				echo "OK";
			} else {
				echo "ERR";
			}
		} elseif($days > 29){
			echo "ERR";
		} else {
			// 1 - 28
			echo "OK";
		}
	}
}
// kiem tra 1 so co 3 chu so va luon luon co so 1 xuat hien va chi 1 lan
// viet bieu thuc chinh quy : kiem tra do manh yeu cua mat khau: 8 ki tu tro le, bao gom it nhat 1 chu hoa, 1 chu thuong, 1 con so
$pass = 'BASADcxcxcewe';
$btcq = '/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]{8,}/';
// viet bieu thuc chinh quy check email va url

 
