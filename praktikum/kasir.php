<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
</head>
<body>
    <form method="post" action="majer.php">
        <table border="1" width="50%" align="center" cellpadding="20px" cellspacing="0">
            <tr>
                <td colspan="3"><h2>Kasir Foodcourt PoOpAI</h2></td>
            </tr>
            <tr>
                <td>Nama Makanan</td>
                <td>:</td>
                <td><input type="text" name="makanan" value=""></td>
            </tr>
            <tr>
                <td>Harga Makanan</td>
                <td>:</td>
                <td><input type="number" name="harga" value=""></td>
            </tr>
            <tr>
                <td>Jumlah Pesanan</td>
                <td>:</td>
                <td> <input type="number" name="jumlah" value=""> </td>
            </tr>
            <tr>
                <td colspan="3">
                <input type="submit" name="" value="Proses">
                <input type="reset" name="" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>