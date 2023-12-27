<?php
//Koneksi Ke MySQL
$cnn = mysqli_connect('localhost','root','');
if (!$cnn) {
    echo "Koneksi gagal";
} else {
    echo "Koneksi Berhasil";
}
?>