<?php
require 'index3.php';
//include 'index3333333.php';

echo "<pre>";
print_r($server);

$a = 10;
$b = 20;
$c = $a + $b;
if($c == 30){
	// dieu huong  trang
	header("Location:index.php");
}