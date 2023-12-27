<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
    <h2 align="center">Create Data</h2>
    <form action="" method="post">
        <table align="center" cellpadding="5px">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Create" name="create"></td>
                <td><a href="crud.php">Back</a></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if (!$cnn) {
    echo "Koneksi Gagal <br/>";
}
if (isset($_POST['create'])) {
    mysqli_query($cnn, "INSERT INTO mahasiswa set nim = '$_POST[nim]', nama = '$_POST[nama]', alamat = '$_POST[alamat]', telp = '$_POST[telp]'");
    echo "Data is Created";
}
?>