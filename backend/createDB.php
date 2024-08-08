<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmeto";
$connect = mysqli_connect($servername, $username, $password);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($connect, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connect);
}
mysqli_close($connect);
?>