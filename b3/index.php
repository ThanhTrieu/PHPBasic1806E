<?php
// hoc ve mang trong php
// khai bao mang trong php
$myArr = array('tao','le','man',0,1,2,3,4);
$myArr2 = ['tao','le','man',0,1,2,3,4];
// => mang tuan tu : key nam trong mang duoc tu dong danh va sap xep tang dan
// in mang : tuyet doi khong echo
// print_r() | var_dump()
// var_dump($myArr);
// echo "<br>";

// echo "<pre>";
// print_r($myArr);
// echo "</pre>";
// khai bao mang khong tuan tu
$infoStudent = [
    'name' => 'NVA',
    'age' => 20,
    'phone' => '09876543'
];
// 3 mang vua khai bao ==> mang 1 chieu
// echo "<pre>";
// print_r($infoStudent);
// khai bao mang da chieu trong php
$myArr3 = ['tao','le',[0,1,2,3,4],100,300,['usd','vnd']];
// echo "<pre>";
// print_r($myArr3);
$myArr4 = array(
    'tao',
    'le',
    array(0,1,2,3,),
    100,
    300,
    array('usd','vnd'),
    [9,1,7]
);
// echo "<pre>";
// print_r($myArr4);
// cach truy cap vao 1 phan tu nam trong mang
// TenMang[TenKey]
// echo $myArr[2];
// echo "<br/>";
// echo $myArr4[5][1];
$listSt = [
    [
        'name' => 'NAB',
        'age' => 20,
        'school' => [
            'A','B','C'
        ]
    ],
    [
        'name' => 'NVC',
        'age' => 22,
        'school' => 'D'
    ],
    [
        'name' => 'NVC',
        'age' => 22,
        'school' => [
            'F','G'
        ]
    ]
];
// echo "<pre>";
// print_r($listSt[2]['school'][1]);
// duyet qua tat cac phan tu nam trong mang
$arrNumber = [1,2,3,4,5,6,7,8,9];
foreach($arrNumber as $k => $v){
    echo "Key : {$k} - Value: {$v}".PHP_EOL;
    echo "<br/>";
    // PHP_EOL == \n
}
echo "******************";
echo "<br/>";
$elements = count($arrNumber);
for($i=0;$i<$elements;$i++){
    echo "Key : {$i} - Value: {$arrNumber[$i]}";
    echo "<br/>";
}

// cac ky thuat xu ly mang
$fruit = [];
$fruit[0]='tao';
$fruit[1]='le';
// echo "<pre>";
// print_r($fruit);
$fruit2 = array();
$fruit2[0] = array('cam','quyt');
// echo "<pre>";
// print_r($fruit2);
$cat = ['foot' => 'abc'];
$cat['name'] = 'Jerry';
$cat['age']  = 3;
$cat['color']= 'black';
echo "<pre>";
print_r($cat);

echo "<br/>";
$dog = [];
$dog[] = [
    'name' => 'ABS',
    'age' => 2
];
echo "<pre>";
print_r($dog);