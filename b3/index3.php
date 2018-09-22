<?php
// tiep tuc xu ly voi mang
// xu ly voi cac ham co san lam viec voi mang trong php
$person = [
    'name' => 'NVA',
    'age' => 20
];
// chuyen key cua mang tu chu thuong sang chu hoa
$person = array_change_key_case($person,CASE_UPPER);
// 1 : hang so mang
// CASE_UPPER
// 0 : hang so mang
// CASE_LOWER

$number = [1,2,3,1,2,3,1,2,3];
$count = array_count_values($number);
array_push($number,100);

$lastEl = array_pop($number); // 100
array_unshift($number, $lastEl);
$firstEl = array_shift($number);

$parentArr = [1,2,3,4,5,6,7,8,9,10];
$childArr = array_chunk($parentArr,2,false);
// viet ham tra ve 1 mang toan so chia het cho 3
function myTest(array $arr) : array {
    /*
    $countEl = count($arr);
    $newArr = [];
    for($i = 0; $i < $countEl; $i++){
        if($arr[$i] % 3 == 0){
            // do cac phan tu do vao 1 mang
            //array_push($newArr, $arr[$i]);
            $newArr[] = $arr[$i];
        }
    }
    return $newArr;
    */
    $newArr = [];
    foreach ($arr as $key => $val) {
       if($val % 3 == 0){
            $newArr[] = $val;
       }
    }
    return $newArr;
}
$kq = myTest($parentArr);

// kiem tra xem 1 bien co phai la mang hay ko
if(is_array($kq)){
    echo "Yes";
} else {
    echo "No";
}
echo "<br/>";
$testNum = [100,200,300,400,500];
if(in_array(300,$testNum)){
    echo "Y";
} else {
    echo "N";
}
echo "<br/>";
$cat = [
    'name' => 'tom',
    'color' => 'black',
    'age' => 2
];

// kiem tra key co ton tai trong mang hay ko?
echo "<br/>";
if(array_key_exists('color',$cat)){
    echo "OK";
} else {
    echo "Fail";
}
echo "<br/>";
$uiqueArr = [2,3,4,1,2,3,4,1,3,4,2,1,1,2,2,2];
$newUnique = array_unique($uiqueArr);

// chuyen mang khong tuan tu ve mang tuan tu - key cua mang khong tuan tu ve key theo con so
$newArr = array_values($cat);
$sumArray = array_sum($uiqueArr);
//echo $sumArray;
$linkUrl = 'http://www.abc.com.vn/hom-nay-la-15-9-trung-thu-trtrt-9.html';

function getIdFromUrl($url){
    $arrUrl = explode('-',$url);
    $endArr = end($arrUrl);
    return intval($endArr);
}
//echo getIdFromUrl($linkUrl );
$arrNumberSort = [9,1,2,8,7,3,4,6,5];
//arsort($arrNumberSort); // sap xep theo value / giam dan
asort($arrNumberSort); // tang dan
// echo "<pre>";
// print_r($arrNumberSort);
$myNumberTest = ['mot' => 1, 'hai' => 2, 'ba' => 3, 'bon' => 4];
ksort($myNumberTest);
// echo "<pre>";
// print_r($myNumberTest);
$arrSortNum = [300,1,200,2,9,10,11,23];
// viet ham sap xep mang ko dc dung ham co san - dung cac thuat toan sap xep
function mySapXepMang($arr)
{
    foreach($arr as $k => $v){
        foreach($arr as $k2 => $v2){
            if($arr[$k] < $arr[$k2]){
                $tg = $arr[$k];
                $arr[$k] = $arr[$k2];
                $arr[$k2] = $tg;
            }
        }
    }
    return $arr;
}
// echo "<pre>";
// print_r(mySapXepMang($arrSortNum));
// viet ham kiem tra xem so 9 co nam trong mang hay ko ? neu co cho biet no o vi tri thu may ? // khong dung bat ky ham nao co san
function searchKeyData(array $arr, int $num) : int {
    foreach ($arr as $key => $val) {
        if($val == $num){
            return $key;
        }
    }
    return 0;
}

print_r(searchKeyData($arrSortNum,9));


