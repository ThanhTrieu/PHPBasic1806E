<?php
// lam viec voi file bang php
// mo file - open file
$fopen = fopen('database/db.txt','a+');
// tham so thu nhat : duong dan den file
// tham so thu hai: quyen thao tac voi file do (r: read only)
// kiem tra xem co mo thanh cong file ko
if($fopen){
	//echo "mo thanh cong";
	// doc du lieu trong file
	// co 3 cach co ban
	// doc tung ki tu 
	// doc theo tung dong
	// doc tu dau file den cuoi file
	// $data = fread($fopen,filesize('database/db.txt'));
	// echo $data;
	// ghi du lieu vao file
	$dt = "LPHP1806E";
	if(fwrite($fopen, $dt)){
		// can doc ra ngoi dung cua file vua dc ghi
		echo "ghi thanh cong <br/>";
		$fp = fopen('database/db.txt','a+');
		$d = fread($fp,filesize('database/db.txt'));
		//echo $d;

	} else {
		echo "Ko ghi dc";
	}

	// dong file
	fclose($fopen);
	fclose($fp);
} else {
	echo "mo that bai";
}


// cac ham bo tro khac lam viec voi file
// 1 - kiem tra file co ton tai ko
if(file_exists('database/db.txt')){
	echo "Yes <br/>";
} else {
	echo "NO <br/>";
}

// 2 - kiem tra file co dc cap quyen ghi hay ko ?
if(is_writable('database/db.txt')){
	echo "Y <br/>";
} else {
	echo "N <br/>";
}
// 3 - ghi noi vao 1 file ma ko can dung fwrite (khong can mo fie)
$content = "hom nay troi mua to";
file_put_contents('database/db.txt',$content);

// 4 - doi ten file rename