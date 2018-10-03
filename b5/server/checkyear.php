<?php 
$year = $_POST['y'] ?? '';
$year = strip_tags($year);

$year = is_numeric($year) ? $year : 0;
// kiem tra nam nhuan
if($year != 0){
	if($year % 400 == 0){
		echo "{$year} la nam nhuan";
	} elseif($year % 4 == 0 && $year % 100 !=0){
		echo "{$year} la nam nhuan";
	} else {
		echo "{$year} khong la nam nhuan";
	}
} else {
	echo "khong phai la nam nhuan";
}