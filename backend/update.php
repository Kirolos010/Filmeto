<?php
$servername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "filmeto";
$connect = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//  connect to the database
session_start();
function test_input($data) {
    //remove extra whitespace from the beginning and end of the string
    $data = trim($data);

    //remove slashes from the string
    $data = stripslashes($data);

    //convert special characters to HTML entities
    $data = htmlspecialchars($data);

    return $data;
}
 $password = "";
if (isset($_POST['submit'])) {  //if the registration form is submitted
    $current = test_input($_POST['password_old']);
    $password = test_input($_POST['password_new']);
//    check if the user exists in the database
    $sqlSelect = "SELECT * FROM users WHERE  password = '$current'";
    $result = mysqli_query($connect, $sqlSelect);
    $count = mysqli_num_rows($result);
    $raw = mysqli_fetch_assoc($result);
    if(is_array($raw)){
        $sql = "UPDATE users SET password = '$password' WHERE password ='$current' ";
        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('password updated successfully');  
            window.location.href='../new/userprofile.php';
            </script>";
        }
    }else{
        echo "<script>
        alert('The email or current password is incorrect');
        window.location.href='../update/index.php';
        </script>";;
    }
      mysqli_close($connect);
}
?>