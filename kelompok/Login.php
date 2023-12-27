<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$data = mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Login where username='".$username."'AND password='".$password."'";

    $result = mysqli_query($data,$sql);
    $row = mysqli_fetch_array($result);
    if($row["usertype"]=="user"){
        header("location:user.php");  
    }else if($row["usertype"]=="admin"){
        header("location:admin.php");
    }else{
        echo "username or password incorrect";
    }
}
?> 

<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
        <h1>Form Login</h1>
        <div style="background-color: blue; width: auto; height: auto;">
        <form action="" method="POST">
            <table cellspacing="0" cellpadding="15px">
                <tr align="center">
                    <td>Username</td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="username"></td>
                </tr>
                <tr align="center">
                    <td>Password</td>
                </tr>
                <tr align="center">
                    <td><input type="password" name="password"></td>
                </tr>
                <tr align="center">
                    <td><input type="Submit" value="Login"></td>
                </tr>
            </table>
        </form>
        </div>
    </center>
</body>
</html>