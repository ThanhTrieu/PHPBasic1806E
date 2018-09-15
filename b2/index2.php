<?php
// kien thuc ve chuoi trong php
//  chuoi : kieu du lieu : string
//  chuoi trong php : thi phai dat trong dau nhay don hoac nhay kep
//  khi dung nhay don thi thong thuong khong chua bien trong chuoi
//  khi dung nhay kep duoc dung bien trong chuoi
$name = 'AB';
echo " di choi di {$name}";
echo "<br/>";
echo 'di choi di {$name}';
echo "<br/>";
echo 'di choi di' . $name;
echo "<br/>";

echo "chung ta dang hoc \"php\" ";
echo "<br/>";
echo 'chung ta dang hoc \'JS\' ';
echo "<br/>";
echo "sap dc 've' roi";
echo "<br/>";
echo ' "Vui" qua may oi';
echo "<br/>";
// cac ham xu ly ve chuoi
$fruit = 'tao,oi,man,le';
// bien chuoi ve mang
$arrFruit = explode(',',$fruit);
print_r($arrFruit);
echo "<br/>";
// bien mang ve chuoi
$strFruit = implode('*',$arrFruit);
echo $strFruit;
echo "<br/>";
// dem so ki tu nam trong chuoi - khong dem chuan khi co dau tieng viet hay cac ki la
echo strlen($strFruit);
echo "<br/>";
$myString = 'hết bão rồi';
//echo mb_strlen($myString);
echo strlen($myString);
echo "<br/>";
echo str_word_count($myString);
echo "<br/>";
echo str_repeat($myString, 3);
echo "<br/>";
$testString = "Chung ta dang hoc PHP";
$newStr = str_replace('PHP', 'JS', $testString);
echo $newStr;
echo "<br/>";
$password = 'hoilamgi';
echo md5($password);
echo "<br/>";
$password2 = 'hoilamgi';
echo md5($password2);