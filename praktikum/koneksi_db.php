<?php
$conn = mysqli_connect('localhost','root','');
if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
}
$sql = "CREATE DATABASE db_kampus";
if (mysqli_query($conn, $sql)) {
    echo "Database Berhasil dibuat";
} else {
    echo "Gagal membuat Database : ".mysqli_error($conn);
}
mysqli_close($conn);
?>