<?php
session_start();

$nama = array('Ali','Bona','Charlie','Dede','Emon');
$pass = array('password1','password2','password3','password4','password5');

$_SESSION['nama'] = $nama;
$_SESSION['pass'] = $pass;

if (isset($_POST['nama']) && ($_POST['pass'])) {
    if (isset($_SESSION['hasil'])) {
        if ($_SESSION['hasil']) {
            echo "Selamat Datang ". $_POST['nama'];
        } else {
            echo "Login Gagal, Silahkan Masukkan Kembali";
        }
    }
    if (($_POST['nama'] == 'Ali') && ($_POST['pass'] == 'password1') ) {
        $_SESSION['hasil'] = true;
    } else if (($_POST['nama'] == 'Bona') && ($_POST['pass'] == 'password2') ) {
        $_SESSION['hasil'] = true;
    } elseif (($_POST['nama'] == 'Charlie') && ($_POST['pass'] == 'password3') ) {
        $_SESSION['hasil'] = true;
    } elseif (($_POST['nama'] == 'Dede') && ($_POST['pass'] == 'password4') ) {
        $_SESSION['hasil'] = true;
    } else if (($_POST['nama'] == 'Emon') && ($_POST['pass'] == 'password5') ) {
        $_SESSION['hasil'] = true;
    } else {
        $_SESSION['hasil'] = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body align="center">
    <form action="" method="post">
        <table cellpadding="10px" align="center">
            <tr align="center">
                <td>Username</td>
            </tr>
            <tr>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr align="center">
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>