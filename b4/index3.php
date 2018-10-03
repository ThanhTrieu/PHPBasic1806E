<?php
// can lay du lieu ma ben phai index2.php gui sang
// su dung bien toan cuc $_GET
// ban chat : $_GET la bien kieu mang - luu toan bo du lieu dc gui di bang method GET
// lay du lieu
$id = $_GET['id'] ?? 0;
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? 0;

echo " Hello my id {$id} - my name: {$name} - my age : {$age} <br/>";

// lay du lieu tu form gui len
// kiem tra xem nguoi dung da gui du lieu len chua?
if(isset($_GET['send'])){
	$username = $_REQUEST['username'] ?? '';
	echo $username;
}


// tinh tong 2 so  - form POST php
// kiem tra xem nguoi dung gui du lieu len chua ?
if(isset($_REQUEST['sum'])){
	$a = $_REQUEST['hsa'] ?? 0;
	$b = $_REQUEST['hsb'] ?? 0;
	$a = is_numeric($a) ? $a : 0;
	$b = is_numeric($b) ? $b : 0;
	$sum = $a + $b;
	echo $sum;
}