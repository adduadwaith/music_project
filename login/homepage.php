<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <a href="logout.php">logout</a>
</head>
<body>
    
</body>
</html>