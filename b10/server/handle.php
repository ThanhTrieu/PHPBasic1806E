<?php 
if(isset($_POST['btnSub'])){
	$bienso = $_POST['bienso'] ?? '';
	$bienso = strip_tags($bienso);
	$bienso = strtoupper($bienso);

	if($bienso){
		// co nhap bien so 
		$check = kiemTraBienSoXeMay($bienso);
		if($check){
			$name = $check[1] ?? '';
			switch ($name) {
				case 'B1':
					header('Location:../index2.php?name=Ba Dinh');
					break;
				case 'G1':
					header('Location:../index2.php?name=Thanh Xuan');
					break;
				case 'C1':
					header('Location:../index2.php?name=Hoan Kiem');
					break;
				case 'L1':
					header('Location:../index2.php?name=Tu Liem');
					break;
				case 'P1':
					header('Location:../index2.php?name=Cau Giay');
					break;
				case 'E1':
					header('Location:../index2.php?name=Dong Da');
					break;
				default:
					header('Location:../index2.php?state=err');
					break;
			}
		}
	} else {
		header("Location:../index2.php?state=fail");
	}
}

function kiemTraBienSoXeMay($bienSoXe)
{
	//$regularExpression;
	$pattern  = '/^29([B,C,E,G,L,P]1)-\d{5}$/';
	if(preg_match($pattern, $bienSoXe, $match)){
		return $match;
	}
	return;
}

// 
$myPattern = '/^0(9[6-8]|86)\d{7}$|^0(9[1,4]|88)\d{7}$|^0(9[0,3])\d{7}$/';






