<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmeto";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
//    echo "Connection failed: " . mysqli_connect_error();
        die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($connect, $dbname);

//create table for credit card
$sql = "CREATE TABLE IF NOT EXISTS credit_card (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
card_number INT(16) UNIQUE NOT NULL,
expiry_date VARCHAR(7) NOT NULL,
cvv INT(3) NOT NULL,
holder_name VARCHAR(30) NOT NULL
)";



if (mysqli_query($connect, $sql)) {
    echo "Table credit_card created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}
?>