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
        'money' => 1000
    ],
    [
        'manv' => 2,
        'map' => 114,
        'namenv' => 'EFG',
        'money' => 400
    ],
    [
        'manv' => 3,
        'map' => 114
        'namenv' => 'FFF',
        'money' => 300
    ],
    [
        'manv' => 4,
        'map' => 113,
        'namenv' => 'XXXX',
        'money' => 300
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
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>demo array php</title>
</head>
<body>
    <table border="1" width="100%" cellpadding="0" cellspacing="0">
        <caption>Thong tin nhan vien</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ten NV</th>
                <th>Ten Phong</th>
                <th>Truong phong</th>
                <th>Luong</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <!-- ky thuat xu ly do du lieu tu mang php ra ngoai ma html -->
        <tbody>
        <?php foreach($nhanvien as $key => $nv): ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <!-- <td><//?php echo $key + 1; ?></td> -->
                <td>
                    <?= htmlentities($vn['namenv']); ?>
                </td>
                <td>
                    <?= htmlentities($vn['name_phong']); ?>
                </td>
                <td>
                    <?= $nv['truong_phong']; ?>
                </td>
                <td>
                    <?= number_format($nv['money']); ?>
                </td>
                <td>
                    [Edit]
                </td>
                <td>
                    [Delete]
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>