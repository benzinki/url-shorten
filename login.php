<?php
require 'connect.php';
if($conn->connect_error){
    die('Connect Failed: ' . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $out = mysqli_query($conn, "SELECT * FROM uname WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method=
    "post">
    <label for="uname">Username:</label>
    <input type="text" id="uname" name="uname" required> <br>
    <label for="psw">Password:</label>
    <input type="password" id="psw" name="psw" required>
    <input type="submit">
    </form>
    <a href="register.php">Register!</a>
</body>
</html>