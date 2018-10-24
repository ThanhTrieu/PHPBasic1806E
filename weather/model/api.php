<?php 

function getDataWeatherFromAPI($city)
{
	// dung CURL - php lay du lieu tu api ve
	$urlApi = "http://api.openweathermap.org/data/2.5/forecast?q={$city}&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi&fbclid=IwAR21QHSHW8WA-nYAYbRsHOQSdrA7RwyeVD_hoSeYDdXmO2jCk1oXtarZ3ps";
	// khoi tao CURL - PHP
	$ch = curl_init();
	// cau hinh 1 so tham so 
	// mo ket not den url api
	curl_setopt($ch,CURLOPT_URL,$urlApi);
	// khong tra ve ket qua luon o day ma doi ham exec no thuc thi moi lay ket qua
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	// xet thoi gian cho doi ket qua tra ve
	curl_setopt($ch,CURLOPT_TIMEOUT,30);
	// thuc thi lay du lieu ve
	$data = curl_exec($ch);
	// ngat ket noi
	curl_close($ch);
	// vi toi biet du lieu ma api tra ve la chuoi Json - (object cua js). Nen chuyen ve kieu mang de lam viec
	$data = json_decode($data,true);
	return $data;
}