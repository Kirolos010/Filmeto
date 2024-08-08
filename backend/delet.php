<?php
$servername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "filmeto";
$connect = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
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
$email= $password = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //if the form is submitted
    // the request method is fine
    $email = test_input($_POST["email"]);
//    $_SESSION['beforeHash'] = clean_input($_POST["password"]);
    $password = test_input($_POST["password"]);//validate the hashed password
    //see if it exists in the database
    $sqlSelect = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($connect, $sqlSelect);
    $count = mysqli_num_rows($result);
    $raw = mysqli_fetch_assoc($result);
    if(is_array($raw)){
        $sql = "DELETE FROM users WHERE email = '$email' and password = '$password'";
        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('Account deleted successfully');  
            window.location.href='../home/index.php';
            </script>";
        }

   
    }else{
        echo "<script>
        alert('The email or password is incorrect');
        window.location.href='../delete/index.php';
        </script>";;
    }
}
?>