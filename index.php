<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="akademik.css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
</head>
<body>
    <h1>Hello World !!!</h1>
    <p>Nama : Gieffari satria abdillah</p>
    <p>NIM  : 16.01.53.0063</p>
    <hr>
    <h3>Data Mahasiswa</h3>
    <table id="edit" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['prodi']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>