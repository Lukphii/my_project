<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah dan Bayar</title>
</head>
<body align="center">
    <h2>Jumlah dan Total Bayar</h2>
    <?php
    $lmbr = $_POST['lembar'];
    $hasil;
    if ($lmbr < 100){
        $harga = 150;
        $total= $lmbr * $harga ;
        echo "Jumlah Lembar = $lmbr <br>";
        echo "Harga Tiap Lembar = $harga <br>";
        echo "Total Bayar = $total <br>";
    }else if ($lmbr < 200){
        $harga = 100;
        $total= $lmbr * $harga ;
        echo "Jumlah Lembar = $lmbr <br>";
        echo "Harga Tiap Lembar = $harga <br>";
        echo "Total Bayar = $total <br>";
    }else if ($lmbr > 200 ){
        $harga = 80;
        $total= $lmbr * $harga ;
        echo "Jumlah Lembar = $lmbr <br>";
        echo "Harga Tiap Lembar = $harga <br>";
        echo "Total Bayar = $total <br>";
    }
    ?>
</body>
</html>