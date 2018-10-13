<?php 
// xu ly ngay thang
// lay ra ngay thang hien tai 
// set timezone
//date_default_timezone_set('Asia/Ho_Chi_Minh');

$date = date('Y-m-d H:i:s');
//echo $date;
// lay ra nam hien tai
$year = date('Y');
//echo $year;
// lay ra thang hien tai
$month = date('m');
//echo $month;
// lay ra ngay hien tai
$d = date('d');
//echo $d;
// so sanh ngay thang trong php

$today = '2018-10-13';
$yesterday = '2018-10-12';

$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);

echo $timeToday . 'va' .$timeYesterday;
echo "<br>";
echo gettype($timeToday);
echo "<br>";
if($timeToday > $timeYesterday){
	echo "OK";
} else {
	echo "ERR";
}
echo "<br>";
// xu ly cong tru ngay thang
$myDate = mktime(0,0,0,10,(13-20),2018);
echo $myDate;
echo "<br>";
// chuyen doi so giay (kieu so) sang ngay thang (kieu date)
$convertDate = date('Y-m-d', $myDate);
echo $convertDate;
echo "<br>";

$testDate = date('Y-m-d',strtotime('+3months'));
echo $testDate;







