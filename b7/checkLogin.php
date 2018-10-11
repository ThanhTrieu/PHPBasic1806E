<?php
function getSessionUsername()
{
	$username = $_SESSION['user'] ?? '';
	return $username ? true : false;
}

function checkAdminLogin(){
	if(!getSessionUsername()){
		header("Location:login.php");
		die;
	}
}

function checkLogined()
{
	if(getSessionUsername()){
		header("Location:home.php");
		die;
	}
}
