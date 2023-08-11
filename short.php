<?php
require 'connect.php';
if($conn->connect_error){
    die('Connect Failed: ' . $conn->connect_error);
}

function visitcount($conn){
    $sql = "UPDATE link SET visitcount = visitcount + 1";
    $conn;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Short</title>
</head>
<body>
    
    <h2>Here is the shorten url</h2>

    <a href="index.php">Back to Main Page</a>

</body>
</html>