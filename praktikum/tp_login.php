<?php
session_start();

$nama = array('Ali','Bona','Charlie','Dede','Emon');
$pass = array('password1','password2','password3','password4','password5');

$_SESSION['username'] = $nama;
$_SESSION['password'] = $pass;

if (isset($_POST['username']) && ($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['submit'] = 1;
    if (isset($_SESSION['hasil'])) {
        if ($_SESSION['hasil']) {
            if ((isset($_SESSION['submit'])) and ($_SESSION['submit']==1)) {
                header("location: tp_berhasil.php");
                exit();
            }
        } else {
            echo "Login Gagal, Silahkan Masukkan Kembali";
        }
    }
    if (($_POST['username'] == 'Ali') && ($_POST['password'] == 'password1') ) {
        $_SESSION['hasil'] = true;
    } else if (($_POST['username'] == 'Bona') && ($_POST['password'] == 'password2') ) {
        $_SESSION['hasil'] = true;
    } elseif (($_POST['username'] == 'Charlie') && ($_POST['password'] == 'password3') ) {
        $_SESSION['hasil'] = true;
    } elseif (($_POST['username'] == 'Dede') && ($_POST['password'] == 'password4') ) {
        $_SESSION['hasil'] = true;
    } else if (($_POST['username'] == 'Emon') && ($_POST['password'] == 'password5') ) {
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
    <link rel="stylesheet" href="hf.css">
</head>
<body>
    <header>
        <h1>Global Website</h1>
    </header>
    <form action="" method="post">
        <table cellspacing="30px" align="center">
            <tr align="center">
                <td colspan="3"><h4>Silahkan Login</h4></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
    <footer>
        Copyright Moh. Luthfi Romadhani
    </footer>
</body>
</html>