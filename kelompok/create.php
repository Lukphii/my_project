<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
    <h2 align="center">Create Data</h2>
    <form action="" method="post">
        <table align="center" cellpadding="15px">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td><input type="text" name="usertype" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Create" name="create"></td>
                <td><a href="admin.php">Back</a></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include "connect.php";
if (isset($_POST['create'])) {
    mysqli_query($connect, "INSERT INTO login set id = '$_POST[id]', username = '$_POST[username]', password = '$_POST[password]', usertype = '$_POST[usertype]'");
    echo "Data is Created";
}
?>