<?php
session_start();
if (isset($_SESSION['submit'])) {
    $nama = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hf.css">
</head>
<body>
    <header>
        <h1>Global Website</h1>
        <?php echo "Username : ".$nama; ?>
    </header>
    <table align="center" cellpadding="30px">
        <tr>
            <td><a href="hal1.php">Link 1</a> | <a href="hal2.php">Link 1</a> | <a href="hal3.php">Link 3</a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr align="center">
            <td>Ini adalah isi dari halaman Link 2</td>
        </tr>
    </table>
    <footer>
        Copyright Moh. Luthfi Romadhani
    </footer>
</body>
</html>