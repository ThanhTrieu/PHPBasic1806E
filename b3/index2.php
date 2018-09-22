<?php
// tiep tuc lam viec voi mang php
// mang thong tin phong lam viec
$phong = [
    [
        'mp' => 113,
        'namep' => 'To chuc',
        'tp' => 'NVA'
    ],
    [
        'mp' => 114,
        'namep' => 'Hanh chinh',
        'tp' => 'NTD'
    ],
    [
        'mp' => 115,
        'namep' => 'IT',
        'tp' => 'NVB'
    ]
];
// mang thong tin nhan vien
$nhanvien = [
    [
        'manv' => 1,
        'map' => 115,
        'namenv' => 'ABC',
        'money' => 1000,
        'gender' => 1 // nam
    ],
    [
        'manv' => 2,
        'map' => 114,
        'namenv' => 'EFG',
        'money' => 400,
        'gender' => 0 // nu
    ],
    [
        'manv' => 3,
        'map' => 114,
        'namenv' => 'FFF',
        'money' => 300,
        'gender' => 1
    ],
    [
        'manv' => 4,
        'map' => 113,
        'namenv' => 'XXXX',
        'money' => 300,
        'gender' => 0
    ]
];
// can xu ly de lay dc thong tin ten phong va ten truong phong cua cac nhan vien kia
foreach($nhanvien as $key => $nv){
    foreach($phong as $k => $p){
        //kiem tra xem nhan vien do thuoc phong nao?
        if($nv['map'] == $p['mp']){
            // lay ten phong va ten truong gan vao du lieu cua tung nhan nam trong mang nhan vien
            $nhanvien[$key]['name_phong'] = $p['namep'];
            $nhanvien[$key]['truong_phong'] = $p['tp'];
        }
    }
}
// xu ly lay du dieu theo ma nhan vien cua tung nguoi
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $id = is_numeric($id) ? $id : 0;
    $infoData = [];
    foreach ($nhanvien as $key => $val) {
        if($val['manv'] == $id){
            // do toan bo du lieu vao mang
            $infoData = $val;
        }
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>demo array php</title>
    <style type="text/css">
        .le{
            background-color: violet;
        }
        .chan {
            background-color: pink;
        }
    </style>
</head>
<body>
    <?php if(isset($_GET['id']) && !empty($infoData)) : ?>
    <form action="" method="">
        <label>Ho ten</label>
        <input type="text" value="<?= $infoData['namenv']; ?>">
        <br><br>
        <label>Tien luong</label>
        <input type="text" value="<?= number_format($infoData['money']); ?>">
    </form>
    <?php endif; ?>

    <br><br>
    <table border="1" width="100%" cellpadding="0" cellspacing="0">
        <caption>Thong tin nhan vien</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ten NV</th>
                <th>Gioi tinh</th>
                <th>Ten Phong</th>
                <th>Truong phong</th>
                <th>Luong</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <!-- ky thuat xu ly do du lieu tu mang php ra ngoai ma html -->
        <tbody>
        <?php $totalMoney = 0; $i = 1; ?>
        <?php foreach($nhanvien as $key => $nv): ?>
            <tr class="<?= ($i % 2 == 0) ? 'chan' : 'le'; ?>">
                <td><?= $key + 1; ?></td>
                <!-- <td><//?php echo $key + 1; ?></td> -->
                <td>
                    <?= htmlentities($nv['namenv']); ?>
                </td>
                <td>
                    <?= ($nv['gender'] == 1) ? 'Nam' : 'Nu'; ?>
                </td>
                <td>
                    <?= htmlentities($nv['name_phong']); ?>
                </td>
                <td>
                    <?= $nv['truong_phong']; ?>
                </td>
                <td>
                    <?= number_format($nv['money']); ?>
                </td>
                <td>
                    <a href="index2.php?id=<?= $nv['manv'];?>">[Edit]</a>
                </td>
                <td>
                    [Delete]
                </td>
            </tr>
            <?php $totalMoney += $nv['money']; $i++; ?>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Tong tien : </td>
                <td colspan="3"><?= number_format($totalMoney); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>