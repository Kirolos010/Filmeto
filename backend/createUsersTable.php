<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmeto";
$connect = mysqli_connect($servername, $username, $password);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($connect, $dbname);

//create database table for users
//To drop a table, use the DROP TABLE + "table name" statement:
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    username VARCHAR(30) NOT NULL
)";

if (mysqli_query($connect, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

?>