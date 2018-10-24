<?php
require '../model/api.php';

// lay ten thanh pho ma nguoi dung gui len
$cityName = $_POST['nameCity'] ?? '';
$cityName = strip_tags($cityName);

$data = getDataWeatherFromAPI($cityName);

require '../view/weather_view.php';