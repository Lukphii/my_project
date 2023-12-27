<?php
$nama = $_POST['makanan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $harga * $jumlah;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar</title>
    <link rel="stylesheet" href="tpkasir.css">
</head>
<body>
    <div id="header">
        <h1>PoOpAI</h1>
        Jln Raya Batuputih No.35 Batang-Batang, Sumenep
        <img id="logo" src="FoodCourt.png" alt="Logo" align="right">
    </div>
    <table border="1" width="50%" align="center" cellpadding="35px" cellspacing="0">
        <tr>
            <td colspan="3"><h2>Pembayaran</h2></td>
        </tr>
        <tr>
            <td>Nama Makanan</td>
            <td>:</td>
            <td><?php switch ($nama) {
                    case 1:
                        echo "Ikan Bakar";
                        break;
                    case 2:
                        echo "Udang Bakar";
                        break;
                    case 3:
                        echo "Lobster Bakar";
                        break;
                    case 4:
                        echo "Cumi Bakar";
                        break;
                    case 5:
                        echo "Kepiting Saus Padang";
                        break;
                    case 6:
                        echo "Gurita Bakar";
                        break;

                    default:
                        echo "Menu yang anda pilih tidak ada";
                }?><br></td>
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
    </table>
    <div id="footer">
        Copyright Moh. Luthfi Romadhani
    </div>
</body>
</html>