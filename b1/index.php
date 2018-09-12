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
if(empty($check)){
    echo "Y";
    echo "<br/>";
    //echo gettype($check);
}