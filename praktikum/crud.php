<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if (!$cnn) {
    echo "Koneksi Gagal <br/>";
}
?>

<table border="1" cellspacing="0" cellpadding="10px">
    <tr align="center">
        <td><strong>NIM</strong></td>
        <td><strong>Nama</strong></td>
        <td><strong>Alamat</strong></td>
        <td><strong>Telp</strong></td>
        <td colspan="2"><strong>Actions</strong></td>
    </tr>
    <?php
    mysqli_select_db($cnn,"db_kampus");
    $sql = "SELECT nim, nama, alamat, telp FROM mahasiswa;";
    $tampil = mysqli_query($cnn, $sql);
    while ($hasil = mysqli_fetch_array($tampil)) {
        echo "<center></center>";
        echo "
            <tr align='center'>
                <td>$hasil[nim]</td>
                <td>$hasil[nama]</td>
                <td>$hasil[alamat]</td>
                <td>$hasil[telp]</td>                    
                <td><a href='update.php?nim=$hasil[nim]'>Update</a></td>
                <td><a href='delete1.php?nim=$hasil[nim]'>Delete</a></td>
                </tr>";
        }
    ?>
    <tr align="center">
        <td colspan="6"><a href="create.php">Create</a></td>
    </tr>
</table>

<?php
$cnn = mysqli_connect('localhost','root','','db_kampus');
if (!$cnn) {
    echo "Koneksi Gagal <br/>";
}
if (isset($_GET['nim'])) {
    mysql_query("DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'");
    header("location:crud.php");
}
?>