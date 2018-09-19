<?php
declare(strict_types=1); // giup thong bao loi khi sai cu phap cua php7

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
// tiep cac ham ve chuoi trong php
echo "<br/>";
$html = "<script>alert('hi')</script>";
$html2 = "<h1><i>AAAAAAAA</i></h1>";
echo $html2;
echo "<br/>";
echo htmlentities($html);
echo "<br/>";
// chuyen cac ma html trong chuoi ve cac ki tu binh thuong
$html4 = htmlentities($html2);
// chuyen het cac ma html trong chuoi ma bi ham htmlentities no chuyen hoa ve ki tu binh thuong ve lai dung cac ma html
$html3 = html_entity_decode($html4);
echo "<br/>";
echo $html3;
echo "<br/>";
$tesHtml = "<h2><u><i>BBBBBBB</i></u></h2>";
echo $tesHtml;
echo "<br/>";
// xoa bo cac the html nam trong chuoi neu khong khai bao giu lai
echo strip_tags($tesHtml,'<h2>');
echo "<br/>";

$testString = 'Chung ta dang hoc php ta cung dang hoc js';
//echo strlen($testString);
// tach 1 chuoi con ra khoi 1 chuoi cha
$newString = substr($testString,14,7);
echo $newString;
echo "<br>";
// tach chuoi tu 1 ki tu cho truoc cho den het chuoi
$newString2 = strstr($testString,'ta');
echo $newString2;
// kiem tra ky tu hay chuoi con co nam trong 1 chuoi cha hay ko
$pos = strpos($testString,'phps');
echo "<br>";
var_dump($pos);
echo "<br>";
if($pos === false){
    echo "not found";
} else {
    echo " Yes";
}

$stringTrim = '     DDDDABCSDD     ';
$stringTrim = trim($stringTrim);// neu khong co tham so thu 2 thi tu dong hieu la xoa khoang trang o hai dau cua chuoi
echo "<br>";
$stringTrim2 = $stringTrim;
echo trim($stringTrim2,'D');
echo "<br>";
$leftTrim = '    ASDSDD    ';
echo ltrim($leftTrim);
echo rtrim($leftTrim);

$testString2 = 'Chung ta dang hoc php ta cung dang hoc js';
// kiem tra xem tu php co nam trong chuoi hay ko ? neu co thi tach chuoi tu vi tri do cho den het chuoi, neu khong tac chuoi tu dau cho den 2/3 chuoi.
// viet ham theo chuan php 7
function mySubString (string $myString, string $charater) : string
{
    $result = null;
    $pos = strpos($myString, $charater);
    if($pos !== false){
        // co thay
        $result = substr($myString, $pos, strlen($myString));
    } else {
        // khong thay
        $result = substr($myString, 0, ceil( (strlen($myString)*2)/3 ));
    }
    // bat buoc phai co return
    return $result;
}
echo "<br/>";
echo mySubString($testString2 ,'php');

