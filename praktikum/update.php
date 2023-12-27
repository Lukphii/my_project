<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if (!$cnn) {
    echo "Koneksi Gagal <br/>";
}
$sql = mysqli_query($cnn, "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2 align="center">Update Data</h2>
    <form action="" method="post">
        <table align="center" cellpadding="5px">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="update"></td>
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
if (isset($_POST['update'])) {
    mysqli_query($cnn, "UPDATE mahasiswa set nama = '$_POST[nama]', alamat = '$_POST[alamat]', telp = '$_POST[telp]' WHERE  nim = '$_GET[nim]'");
    echo "Data is Updated";
}
?>