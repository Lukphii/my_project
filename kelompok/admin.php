<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div id="navbar">
        <p>Admin</p>
    </div>
    <div align="center" class="tabel">
        <table border="1" cellspacing="0" cellpadding="25px">
            <tr align="center">
                <td><strong>ID</strong></td>
                <td><strong>Username</strong></td>
                <td><strong>Password</strong></td>
                <td><strong>Usertype</strong></td>
                <td colspan="2"><strong>Actions</strong></td>
            </tr>
            <?php
            include "connect.php";
            $getdata = mysqli_query($connect, "SELECT * FROM login");
            while ($hasil = mysqli_fetch_array($getdata)) {
                echo "
                <tr align='center'>
                    <td>$hasil[id]</td>
                    <td>$hasil[username]</td>
                    <td>$hasil[password]</td>
                    <td>$hasil[usertype]</td>                    
                    <td><a href='update.php?id=$hasil[id]'>Update</a></td>
                    <td><a href='?id=$hasil[id]'>Delete</a></td>
                    </tr>";
            }
            ?>
            <tr align="center">
                <td colspan="3"><a href='create.php?id=$hasil[id]'> Create </a></td>
                <td colspan="3"><a href="logout.php">Logout</a></td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
if(isset($_GET['id'])){
    mysqli_query($connect, "DELETE FROM login WHERE id='$_GET[id]'");

    echo "Data is Deleted";
}
?>