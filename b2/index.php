<?php
declare(strict_types=1); // giup thong bao loi khi sai cu phap cua php7

// hoc cach dinh nghia ham trong php
// dinh nghia ham chay cho tat ca cac phien ban php
function myFunction($a = 5, $b = 7)
{
    return $a + $b;
}
// cach su dung ham - goi ham trong php
$sum = myFunction(10, 19);
echo $sum;
echo "<br/>";
// $b = 'abc';
// $c = 'asd';
// echo $b . $c; // + trong js
//
// viet ham tim tat ca boi so chung cua 3,5 trong pham vi 1 - 100;
function timBSC($n1,$n2){
    $kq = '';
    for($i = 1; $i <= 100; $i++){
        if($i % $n1 == 0 && $i % $n2 == 0){
            $kq .= (empty($kq)) ? $i : ',' . $i;
        }
    }
    return $kq;
}

//echo timBSC(3,5);
// viet ham kiem tra so nguyen to
function checkSNT($n){
    if($n <= 1){
        return false;
    }
    if($n == 2){
        return true;
    }
    for($i = 2; $i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
$myNumber = 12;
$res = checkSNT($myNumber);
if($res){
    echo $myNumber . 'la so nguyen to';
} else {
    echo $myNumber . 'khong la so nguyen to';
}

$number = 100; // toan cuc
function checkNumber(){
    // muon su dung 1 bien toan cuc tu ngoai ham vao trong ham can lam nhu sau
    global $number; // bao cho ham biet no la bien toan cuc khai bao ngoai ham
    if($number % 2 == 0){
        return 'YES';
    }
    return 'NO';
}
echo "<br/>";
var_dump(checkNumber());
//var_dump : in kieu du lieu va gia tri cua bien - no lam viec voi tat ca cac kieu du lieu khac nhau cua bien
// echo : in gia tri cua bien va chi lam viec voi kieu du lieu la string
// khai niem bien toan cuc va cuc bo trong php
echo "<br/>";
// tim hieu tham chieu (tham bien) va tham tri trong ham php
//
$thamCT = 100;
function testThamTri($thamCT){
    $thamCT -= 90;
    return $thamCT;
}
echo testThamTri($thamCT);
echo "<br>";
echo $thamCT;

echo "<br>";
$testTC = 200;
function testThamChieu(&$testTC){
    return $testTC += 100;
}
echo testThamChieu($testTC);
echo "<br>";
echo $testTC;
echo "<br>";
// bien tinh - static trong ham php
// bien do se duoc luu lai gia tri sau moi lan goi ham
function testStatic(){
    static $count = 0;
    $count++;
    return $count;
}
echo testStatic();
echo "<br>";
echo testStatic();
echo "<br>";
// dinh nghia ham theo php7 -  chi chap cu phap loai nay khi may tinh cua ban da cai php7 tro len

function checkMyNumber(int $a) : bool {
    // tham so truyen vao ham phai la kieu integer
    // ham bat buoc phai tra ket qua ve la kieu boolean - ham phai co return
    if($a % 2 == 0){
        return true;
    }
    return false;
}

var_dump(checkMyNumber(12));
echo "<br>";
function helloWord(string $a) : string
{
    //echo $a; // loi vi ham ko co return
    return $a;
}
helloWord('1000');
// viet ham giai pt bac 2 voi kieu ham php 7


