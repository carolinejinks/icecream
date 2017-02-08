<?php
$server   = "localhost";
$database = "caroli12_flavors";
$username = "caroli12_flavors";
$password = "189636569391025";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
