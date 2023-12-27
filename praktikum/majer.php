<?php
$nama = $_POST['makanan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;
$bayar = $total - $kembalian;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majer</title>
</head>
<body>
    <table border="1" width="50%" align="center" cellpadding="20px" cellspacing="0">
    <tr>
        <td colspan="3"><h2>Pembayaran</h2></td>
    </tr>
    <tr>
        <td>Nama Makanan</td>
        <td>:</td>
        <td><?php echo $nama ?><br></td>
    </tr>
    <tr>
        <td>Harga Makanan</td>
        <td>:</td>
        <td><?php echo $harga ?><br></td>
    </tr>
    <tr>
        <td>Jumlah Pesanan</td>
        <td>:</td>
        <td><?php echo $jumlah ?><br></td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:</td>
        <td><?php echo $total ?><br></td>
    </tr>
    <tr>
        <td>Bayar</td>
        <td>:</td>
        <td><?php echo $bayar ?><br></td>
    </tr>
    </table>
    <a href="kasir.php"><---Kembali</a>
</body>
</html>