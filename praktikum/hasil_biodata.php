<?php
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$semester = $_POST['semester'];
$pesan = $_POST['pesan'];

echo "<h2>Biodata Saya</h2>";
echo "Saya $nama<br>";
if ($kelamin=="laki-laki") {
    echo "Jenis Kelamin Saya Laki-Laki<br>";
} else {
    echo "Jenis Kelamin Saya Perempuan<br>";
}
echo "Saya Masuk Prodi ";
if (isset($_POST['si'])) {
    echo $_POST['si']."<br>";
} 
if (isset($_POST['infor'])) {
    echo $_POST['infor']."<br>";
}
if (isset($_POST['ti'])) {
    echo $_POST['ti']."<br>";
}
echo "Saya Sedang Menempuh $semester<br>";
echo "Pesan Dari Saya :<br>";
echo "$pesan";
?>