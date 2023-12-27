<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div id="navbar">
        <p>User</p>
    </div>
    <div align="center">
        <table border="1" cellspacing="0" cellpadding="25px">
            <tr align="center">
                <td colspan="3"><h1>Sistem pemesanan tiket travel</h1></td>
            </tr>
            <tr align="center">
                <td colspan="3"><h4>Deskripsi sistem</h4>
                <text>Sistem pemesanan tiket travel berbasis web diperlukan suatu perancangan sistem yang baik dan tepat. Hal ini bertujuan untuk memberikan gambaran yang jelas dan rinci. Dengan pendekatan perancangan sistem berorientasi objek. Pada sistem ini menangani pemesanan tiket yang memudahkan dalam melakukan pemesanan secara online.</text>
                </td>
            </tr>
            <tr align="center">
                <td><strong>ID</strong></td>
                <td><strong>Username</strong></td>
                <td><strong>Usertype</strong></td>
            </tr>
            <?php
            include "connect.php";
            $getdata = mysqli_query($connect, "SELECT * FROM login");
            while ($hasil = mysqli_fetch_array($getdata)) {
                echo"
                <tr align='center'>
                <td>$hasil[id]</td>
                <td>$hasil[username]</td>
                <td>$hasil[usertype]</td>
            </tr>";
            }
            ?>
            <tr align="center">
                <td colspan="3">KELOMPOK : <br>
                Moh.Luthfi Romadhani <br>
                Sony Febriyanto <br>
                Saiful Anwar</td>
            </tr>
            <tr align="center">
                <td colspan="3"><a href="logout.php">Logout</a></td>
            </tr>
        </table>
    </div>
</body>
</html>