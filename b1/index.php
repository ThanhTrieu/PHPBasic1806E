<?php
// khi trong file chi chua ma nguon la php khong can the dong - comment tren 1 dong
/*
khi trong file chi chua ma nguon la php khong can the dongg - comment tren nhieu dong
*/
// prs1- prs2
echo "Hello word";
// echo : hien thi - in chuoi ra man hinh trinh duyet
// document.write()
$number;// bien hop le
//$1abc; // khong hop le
//$1 // khong hop
$_123; // hop le
$a; $A; // 2 bien nay khac nhau hoan toan
$myNumber = 10;
$my_number = 30;
$MyNumber = 40;
$soCuaToi = 90; // ko nen - chuan theo tieng anh
$myTest = 'hello';
echo "<br>";

$test = "myTest";
echo $$test;
echo "<br/>";

$b = 'hi';
$c = 'b';
echo $$c;
// dinh nghia hang so trong php
echo "<br/>";
define('PI', 3.14); // hang so
//echo $PI; // sai
echo PI;
echo "<br/>";
const MY_NUMBER = 200;
echo MY_NUMBER;

$test1 = 12;
$test2 = true;
$test3 = '123';
echo "<br/>";
//echo gettype($test1);
//echo gettype($test2); // kiem tra kieu du lieu cua bien
//echo gettype($test3);
$sum = $test1 + $test3;
echo $sum; //135
// xet lai gia tri cho 1 bien
settype($test3,'integer');
echo "<br/>";
echo gettype($test3);
$test4 = '10';
$test4 = (int) $test4;
echo "<br/>";
echo gettype($test4);
$integer = 55.89;
$integer = intval($integer); // lay ra phan nguyen
echo "<br/>";
echo $integer;
echo "<br/>";
$float = 1000.90;
$float = floatval($float);
echo $float;
echo "<br/>";
$check; // khong bao gio khai bao bien ntn
$check2 = '';
$check3 = null;
$check4 = false;
if(empty($check4)){
    echo "Y";
    echo "<br/>";
    //echo gettype($check);
}
// kiem tra 1 bien co ton tai hay ko?
// bien da phai dc khai bao va khong dc gan gang null
if(isset($check3)){
    echo "Yes" . PHP_EOL; // PHP_EOL = \n
} else {
    echo "No" . PHP_EOL; // PHP_EOL = \n
}
echo "<br/>";
$idNumber = '10101';
if(is_numeric($idNumber)){
    echo "OK" . PHP_EOL; // PHP_EOL = \n
} else {
    echo "Fail" . PHP_EOL; // PHP_EOL = \n
}
echo "<br/>";
if(is_int($idNumber)){
    echo "OK - 1" . PHP_EOL; // PHP_EOL = \n
} else {
    echo "Not ok - 1" . PHP_EOL; // PHP_EOL = \n
}
echo "<br/>";

$num1 = 10;
$num2 = 100;
//$num1 = ($num2 < $num1) ? $num2 - $num1: 0;
// toan tu dieu kien cho tat ca cac phien ban php khac nhau
//echo $num1;
// toan tu dieu kien chi chay rieng cho phien banr php7 tro len
//$num1 = ($num3) ?? 200;
// ket hop ham isset va toan tu dieu kien
// $num1 = (isset($num3)) ? $num3 : 200;
//echo $num1;
$compare = $num1 <=> $num2;
echo $compare;
echo "<br/>";

$test1 = '';
if($test1 === false){
    echo "Y";
} else {
    echo "N";
}

