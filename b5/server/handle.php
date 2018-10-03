<?php
// vi khong dung form - submit nen khong can kiem tra nguoi dung da submit form hay chua
// lay gia tri tu phia form ajax gui len
$msv = $_POST['keyword'] ?? '';

// server se co nhung kieu du lieu tra ve nhu sau
// server tra ve kieu text - string
// server tra ve kieu json(chuoi json - object cua js)
// server tra ve kieu html (tra ve ma html - bao gom cac the html)

//echo $msv; // kieu text

//$data = [];
//$data['msv'] = $msv;
// json_encode : bien mang ve chuoi json - object js
//echo json_encode($data); // tra ve chuoi json

// tra ve ma html
$infoSt = [
	[
		'msv' =>113,
		'name' => 'NVA',
		'email' => 'nva@gmail.com',
		'phone' => '09876543',
		'address' => 'HN',
		'gender' => 0,
		'money' => 12345
	],
	[
		'msv' =>114,
		'name' => 'NVB',
		'email' => 'nvb@gmail.com',
		'phone' => '09976543',
		'address' => 'BN',
		'gender' => 1,
		'money' => 10000
	],
	[
		'msv' =>115,
		'name' => 'NVC',
		'email' => 'nvc@gmail.com',
		'phone' => '09976543',
		'address' => 'BN',
		'gender' => 1,
		'money' => 10000
	]
];
// xu ly lay ra thong tin cua sinh vien theo ma sv ma nguoi dung nhap vao
$result = [];
foreach($infoSt as $key => $item ){
	if($item['msv'] == $msv){
		$result[] = $item;
	}
}

// nap - load vao 1 view - ma html
// nhung file info.php vao day
require '../view/info.php';
