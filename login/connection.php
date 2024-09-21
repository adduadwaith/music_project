<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Adwaith@222";
$dbname = "signup_db";

// Attempt to connect to the database
if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,3307)) {
    die("Failed to connect");
}
?>
