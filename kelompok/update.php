<?php
include "connect.php";
$sql = mysqli_query($connect, "SELECT * FROM login WHERE id = '$_GET[id]'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2 align="center">Update Data</h2>
    <form action="" method="post">
        <table align="center" cellpadding="15px">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $data['id'] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $data['password'] ?>"></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td><input type="text" name="usertype" value="<?php echo $data['usertype'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="update"></td>
                <td><a href="admin.php">Back</a></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include "connect.php";
if (isset($_POST['update'])) {
    mysqli_query($connect, "UPDATE login set username = '$_POST[username]', password = '$_POST[password]', usertype = '$_POST[usertype]' WHERE  id = '$_GET[id]'");
    echo "Data is Updated";
}
?>